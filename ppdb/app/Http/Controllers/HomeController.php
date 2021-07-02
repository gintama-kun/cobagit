<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use App\User;
use Response;
use App\file_uploads;
use App\sekolahs;
use PDF;
use App\Daftar;
use App\formulirs;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // New
     //======================================================================
    //Admin

    public function Datas_Siswa()
    {
        $formulirs = Daftar::get()->where('status','==','diterima');
        return view('admin.data_siswa',['formulirs' => $formulirs]);
    }

    //petugas
    // public function petugas_permintaan()
    // {
    //     $data = formulirs::all()->toArray();
    //     return view('petugas.calonsiswa',compact('data'));
           
    // }
      //======================================================================
    public function permintaan()
    {
        $data = Daftar::all()->toArray();
        return view('petugas.data_pendaftar',compact('data'));
           
    }

    public function peta()
    {
        return view('sekolah.peta_sekolah');
    }

    public function pengumuman()
     {
        $data =DB::table('file_uploads')->where('id','1')->get();
       
       
        return view('siswa.pengumuman',compact('data'));
    }

   public function profile_sekolah()
   {
    $data =sekolahs::all()->where('id','==',1);
       return view('sekolah.profile_sekolah',compact('data'));
   }
    public function data_sekolah()
    {
        $sekolah = DB::table('sekolahs')->where('id','1')->get();
        return view('sekolah.tambah_profile_sekolah',['sekolahs' => $sekolah]);
    }
    public function delete_sekolah()
    {
        sekolahs::whereNotNull('id')->truncate();
        return redirect('/Admin/Sekolah');
    }

    public function tambah_data_sekolah(Request $request)
    {
        if($request->file('image') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/sekolah", $fileName);
            $gambar = $fileName;
        }
        $q = DB::table('sekolahs')->insert([
            'kepsek' => $request['kepsek'],
            'operator' => $request['operator'],
            'akreditasi' => $request['akreditasi'],
            'kurikulum' => $request['kurikulum'],
            'waktu' => $request['waktu'],
            'NPSN' => $request['NPSN'],
            'status' => $request['status'],
            'bentuk_pendidikan' => $request['bentuk_pendidikan'],
            'status_kepemilikan' => $request['status_kepemilikan'],
            'image' => $gambar
            
            
        ]);
        
        if ($q) {
            toast('Data Tersimpan','success');
            return redirect('/dashboard');
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }































    //======================================================================
    

    public function about()
    {
        return view('about');
    }

    //texteditorprofile
    public function summerstore(Request $request)
    {
		$detail=$request->summernoteInput;

		$dom = new \domdocument();
		$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		$images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
		foreach($images as $k => $img){
			$data = $img->getattribute('src');

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$image_name= time().$k.'.png';
			$path = public_path() .'/'. $image_name;

			file_put_contents($path, $data);

			$img->removeattribute('src');
			$img->setattribute('src', $image_name);
		}

		$detail = $dom->savehtml();
		$profile = User::find(Auth::user()->id);
		$profile->content = $detail;
		$profile->save();
        return view('akun.profile',compact('profile'));
    }





    public function cetak_pdf(Request $request)
    {
        $cari = $request->cari;
        $formulirs = Daftar::where('kode','like',"%".$cari."%")
		->paginate();
        
        
    	$pdf = PDF::loadview('siswa.export_pdf_hasil',['formulirs'=>$formulirs]);
    	return $pdf->download('hasil-pdf.pdf');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cancelss($id)
    {
        $data = formulirs::find($id);
        $data->delete();

        return redirect('/data');
    }
    

    public function homes()
    {
        return view('homes');
        
       
    }
    public function formulir()
    {
        return view('siswa.formulir');
    }
    public function profile()
    {
    //     $profile = User::find(Auth::user()->id); 
    //    return view('akun.profile',compact('profile'));


    if (Auth::user()) {
        $user = User::find(Auth::user()->id);
        if ($user) {
           return view('akun.profile')->withUser($user);
        } else {
           return redirect()->back();
        }
        
    } else {
        return redirect()->back();
    }
       
    }
    public function cek(){
       
 
    		
		return view('siswa.stat');
    }

    public function konfirmasi_siswa(Request $request, $id)
    {
        $konfirmasi = Daftar::find($id);
        $konfirmasi->status = "diterima";
        
       

        $konfirmasi->save();
    	return back();
    }
    public function status(Request $request, $id)
    {
        $this->validate($request,[

            
            'jurusan'=> 'required'
        ]);
        
        $pengguna = Daftar::find($id);//model
       
        $pengguna->jurusan =$request->get('jurusan');
        $pengguna->status = 'diterima';

        $pengguna->save();
        return redirect()->back();
       
    }

    public function konfirmasi_siswa_tolak(Request $request, $id)
    {
        $tolaks = Daftar::find($id);
        $tolaks->status = "ditolak";

        $tolaks->save();
    	return back();
    }

    

   

    public function destroy($id)
    {
        $data = Daftar::find($id);
        $data->delete();

        if ($data) {

            toast('Data dihapus','warning');
            return back();
        }
        
    }


    public function data_siswa()
    {
        $formulirs = Daftar::get()->where('status','==','diterima');
        return view('admin.datasi',['formulirs' => $formulirs]);
    }

    public function akhir(){
        $formulirs = Daftar::all()->toArray();
 
    		
		return view('siswa.akhir',['formulirs' => $formulirs]);
    }
   
        public function cari(Request $request)
	{
	
		$cari = $request->cari;
 
    		
            $formulirs = Daftar::
		where('kode','like',"%".$cari."%")
		->paginate();
        
            if($formulirs==null){
                return redirect()->back();
                toast('Data Tersimpan','success');
            }else{
                return view('siswa.akhir',['formulirs' => $formulirs]);
            }

            
 
    }
    public function nama(Request $request)
	{
	
		$cari = $request->cari;
 
    		
            $formulirs = Daftar::
		where('nama_lengkap','like',"%".$cari."%")
		->paginate();
        
            if($formulirs==null){
                return redirect()->back();
                toast('Data Tersimpan','success');
            }else{
                return view('siswa.data_daftar_cari',['formulirs' => $formulirs]);
            }
    }

    public function result(){
        $formulirs = Daftar::all()->toArray();
 
    		
		return view('siswa.data_daftar_cari',['formulirs' => $formulirs]);
    }



}
