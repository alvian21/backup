<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web')->except(["login", "getLogin"]);
    }
    public function getLogin()
    {
        if (Auth::guard("web")->check()) {
            return redirect()->route('dashboard.index');
        } else {
            return view("auth.new_login");
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $user = User::where('UserLogin', $request->get('username'))->where('UserPassword', $request->get('password'))->where('BolehBackup',1)->first();
            if ($user) {
                $auth = Auth::guard("web")->login($user);
                $user = Auth::guard('web')->user();


                session()->flash('info', 'Selamat Datang  !');
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->back()->withErrors("wrong kode user or password");
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        Session::flush();

        return redirect('/login')
            ->with('alert-info', 'Anda telah keluar, Sampai ketemu lagi!');
    }
}
