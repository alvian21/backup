<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trbackup;
use Spatie\Backup\BackupDestination\Backup;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'database' => 'required|file',
            'KodeLokasi' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {

            $db = $request->file('database');
            $ext = $db->getClientOriginalExtension();
            $namafile = $request->get('KodeLokasi') . date('Ymd') . '.' . $ext;
            Storage::putFileAs('public/backup',$db, $namafile);
            $backup = new Trbackup();
            $backup->Nama = $namafile;
            $backup->KodeLokasi = $request->get('KodeLokasi');
            $backup->LastUpdate = date('Y-m-d H:i:s');
            $backup->save();


            return response()->json([
                'status' => true,
                'message' => 'saved'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
