<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use SweetAlert;
class akun extends Controller
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

    //admin/datatables
    //========================================
    // public function user_detailv()
    // {
    //     return Datatables::of(User::query())->make(true);
    // }

   

    // ====================================================NEW===================================================

    public function Data_Akun()
    {
        $users =User::get()->where('id','!=',1);
        return view('admin.data_akun',['users' => $users]);
    }
    public function updateStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
    
        return response()->json(['message' => 'User status updated successfully.']);
    }

    // ====================================================NEW===================================================

    public function user_detail_view()
    {
        $users =User::get()->where('id','!=',1);
        return view('admin.Rincian_p',['users' => $users]);
    }
    
    
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function destroy_data($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }

    public function destroy_akun($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return back();
    }



    //========================================


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function edit_profile()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
               return view('akun.adit_profile')->withUser($user);
            } else {
               return redirect()->back();
            }
            
        } else {
            return redirect()->back();
        }
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
    public function update(Request $request)
    {
        
       

            $user = User::find(Auth::user()->id);
            if ($user) {
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

               $user->nama_lengkap = $request['nama_lengkap'];
               $user->nama_panggilan = $request['nama_panggilan'];
               $user->tgl_lahir = $request['tgl_lahir'];
               $user->no_hp = $request['no_hp'];
               $user->alamat = $request['alamat'];
               $user->email = $request['email'];
               $user->asal_sekolah = $request['asal_sekolah'];
              if (Auth::user()->nip != null || Auth::user()->nisn == null) {
                $user->nip = $request['nip'];
              } elseif (Auth::user()->nip == null || Auth::user()->nisn != null) {
                $user->nisn = $request['nisn'];
              }
              
               $user->tgl_lahir = $request['tgl_lahir'];
            //    $user->password = Hash::make($request['password']);
                $user->image= $gambar;
               $user->save();

               return redirect('/profile');
            } else {
               return redirect()->back();
            }
            

        
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
