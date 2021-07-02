<?php

namespace App\Http\Controllers;

use App\file_uploads;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        $file_uploads = DB::table('file_uploads')->where('id','1')->get();

        return view('admin.fileUpload',['file_uploads' => $file_uploads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fileUploadPost(Request $request)
    {
       if($request->file('file') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('file');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('file')->move("uploads", $fileName);
            $file = $fileName;
        }
        $q = DB::table('file_uploads')->insert([
            
            'file' => $file,
             
        ]);
        
        if ($q) {
           
          
            toast('Data Tersimpan','success');
            return redirect('/file-upload');
        }
            
   
    }
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
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(file_uploads $file_uploads)
    {
        file_uploads::whereNotNull('id')->truncate();
        return redirect('/file-upload');
    }
}
