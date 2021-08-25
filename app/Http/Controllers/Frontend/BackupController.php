<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Trbackup;
use Illuminate\Http\Request;
use Spatie\Backup\BackupDestination\Backup;
use Illuminate\Support\Facades\Response;
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
        $backup = Trbackup::orderBy('LastUpdate','DESC')->get();
        return view("frontend.backup.index", ['backup' => $backup]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $backup = Trbackup::findOrFail($id);
        $filename = $backup->Nama;
        $file_path = storage_path('app/public/backup/').$filename;
        $headers = array(
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename=' . $filename,
        );
        if (file_exists($file_path)) {
            // Send Download
            return Response::download($file_path, $filename, $headers);
        } else {
            // Error
            exit('Requested file does not exist on our server!');
        }
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
