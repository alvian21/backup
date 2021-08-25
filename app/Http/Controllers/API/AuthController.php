<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'UserLogin' => 'required',
            'UserPassword' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            $user = User::where('UserLogin', $request->get('UserLogin'))->where('UserPassword', $request->get('UserPassword'))->first();
            if ($user) {
                $token = JWTAuth::fromUser($user);
                $user->token = $token;
                $user->save();


                return $this->respondWithToken($token, true);
            } else {
                return response()->json([
                    'status' => false,
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => 'wrong username or password'
                ]);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            if (isset($user->token)) {
                $user->token = null;
                $user->save();
            }

            return response()->json([
                'status' => false,
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => "Token Expired"
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json([
                'status' => false,
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => "Invalid Token"
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json([
                'status' => false,
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => "could_not_create_token"
            ]);
        }
    }

    protected function respondWithToken($token, $status)
    {
        return response()->json([
            'status' => $status,
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }
}
