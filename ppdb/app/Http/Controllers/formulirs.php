<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Daftar;
use Illuminate\Support\Facades\Auth;
use App\DaftarController;
use Session;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use SweetAlert;
use App\Exports\Export;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
class formulirs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    //  ======================= NEW ============================

    public function Tambah_Siswa_Baru()
    {
        return view('admin.tambah_siswa');
    }

    public function Tambah_Data_Siswa(Request $request)
    {
        if($request->file('image') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $gambar = $fileName;
        }
        $q = DB::table('daftars')->insert([
            'kode' => $request['kode'],
            'nama_lengkap' => $request['nama_lengkap'],
            'nama_panggilan' => $request['nama_panggilan'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'nisn' => $request['nisn'],
            'agama' => $request['agama'],
            'ayah' => $request['ayah'],
            'pendidikan_ayah' => $request['pendidikan_ayah'],
            'pekerjaan_ayah' => $request['pekerjaan_ayah'],
            'ibu' => $request['ibu'],
            'pendidikan_ibu' => $request['pendidikan_ibu'],
            'pekerjaan_ibu' => $request['pekerjaan_ibu'],
            'wali' => $request['wali'],
            'pendidikan_wali' => $request['pendidikan_wali'],
            'pekerjaan_wali' => $request['pekerjaan_wali'],
            'alamat' => $request['alamat'],
            'tgl_lahir' => $request['tgl_lahir'],
            'image' => $gambar,
            
            // 'file_gambar' => $nama_file,
            'asal_sekolah' => $request['asal_sekolah'],
            'rata' => $request['rata'],
            'jurusan' => $request['jurusan'],
            'no_telepon' => $request['no_telepon'],
            'status'=> 'diterima',
            'user_id' => Auth::user()->id
            
            
        ]);
        
        if ($q) {
            $nama = $request['nama_lengkap'];
            $kode = $request->kode;
 
    		
            toast('Data Tersimpan','success');
            return redirect('/Admin/DataSiswa');
        }
    }


    // =========================================================
    public function create()
    {
        //
    }

    //export excel
    public function import_excel(Request $request) 
    {
       
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file_siswa',$nama_file);	
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
		return redirect('/Admin/DataSiswa');
    }

	public function export_excel()
	{
		return Excel::download(new Export, 'Data_Siswa.xlsx');
    }
    
    


    public function data_pengguna()
    {
        $data =User::all()->where('id','!=',1);
        return view('admin.datap',compact('data'));
    }
    

    public function edit($id)
    {
        $pengguna = User::find($id);
        
        return view('admin.edit_pengguna',compact('pengguna'));
    }

    
    public function tambah_formulirs(Request $request)
    {
        // $file = $request->file('foto');
        // $nama_file = time()."_".$file->getClientOriginalName();
        // $tujuan_upload = 'upload_gambar';
        // $file->move($tujuan_upload,$nama_file);
        
        if($request->file('image') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $gambar = $fileName;
        }
        $q = DB::table('daftars')->insert([
            'kode' => $request['kode'],
            'nama_lengkap' => $request['nama_lengkap'],
            'nama_panggilan' => $request['nama_panggilan'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'nisn' => $request['nisn'],
            'agama' => $request['agama'],
            'ayah' => $request['ayah'],
            'pendidikan_ayah' => $request['pendidikan_ayah'],
            'pekerjaan_ayah' => $request['pekerjaan_ayah'],
            'ibu' => $request['ibu'],
            'pendidikan_ibu' => $request['pendidikan_ibu'],
            'pekerjaan_ibu' => $request['pekerjaan_ibu'],
            'wali' => $request['wali'],
            'pendidikan_wali' => $request['pendidikan_wali'],
            'pekerjaan_wali' => $request['pekerjaan_wali'],
            'alamat' => $request['alamat'],
            'tgl_lahir' => $request['tgl_lahir'],
            'image' => $gambar,
            
            // 'file_gambar' => $nama_file,
            'asal_sekolah' => $request['asal_sekolah'],
            'rata' => $request['rata'],
            'pilihan1' => $request['pilihan1'],
            'pilihan2' => $request['pilihan2'],
            'no_telepon' => $request['no_telepon'],
            'status'=> 'proses',
            'user_id' => Auth::user()->id
            
            
        ]);
        
        if ($q) {
            $nama = $request['nama_lengkap'];
            $kode = $request->kode;
 
    		
            //     $daftars = User::
            // where('kode','like',"%".$cari."%")
            // ->paginate();
           
            toast('Permintaan terkirim','success');
            
            return redirect('/siswa/data')->with('permintaan', "Permohonan atas nama $nama sedang di proses");
        }
    }


   

    public function data_formulir()
    {
        return view('siswa.formulir');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            
            
            'role'=> 'required'
        ]);
        
        $pengguna = User::find($id);//model
       
        $pengguna->role =$request->get('role');

        $pengguna->save();
    	return redirect('/Admin/DataAkun')->with('success','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();


        if ($data) {

            toast('Akun Dihapus','success');
            return back();
        }
        
    }
    
}
