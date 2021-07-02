<?php

use RealRashid\SweetAlert\Facades\Alert;
use App\Event;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//about
// Route::get('/about','HomeController@about');
Route::get('/', function () {

    
    return view('welcome');
});

Route::get('/about', function () {

    
    return view('about');
});


Route::get('/blocked', function () {

    
    return view('blocked');
});


Auth::routes();


// NEW Route PPDB SMKN 2 Kec.Guguak


//profile
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/edit', 'akun@edit_profile')->name('user.edit');
Route::post('/profile/update', 'akun@update')->name('user.update');

Route::get('/siswa', function () {

    $event =Event::all();
    return view('siswa.form',compact('event'));
});
// login 
Route::group(['middleware' => ['auth','cekstatus']],function(){
    Route::get('/dashboard', function () {

    
        return view('dashboards.dashboard');
    });
});

//Email

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


//Peta
Route::get('/peta_sekolah','HomeController@peta');

//Admin++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ==========Data Siswa==========
Route::get('/Admin/DataSiswa','HomeController@Datas_Siswa');
Route::get('/Admin/TambahSiswa','formulirs@Tambah_Siswa_Baru');
Route::post('/Admin/TambahDataSiswa','formulirs@Tambah_Data_Siswa');

// ==========Data Sekolah==========
Route::get('/ProfileSekolah','HomeController@profile_sekolah');
Route::get('/Admin/Sekolah','HomeController@data_sekolah');
Route::post('/Admin/TambahDataSekolah','HomeController@tambah_data_sekolah');
Route::get('/Admin/Sekolah/Delete','HomeController@delete_sekolah');

//pengumuman
Route::get('/pengumuman','HomeController@pengumuman');
//cari kode(token)
Route::get('/siswa/cek','HomeController@cek');
Route::get('/data/cari','HomeController@cari');
Route::get('/data/cari/akhir','HomeController@akhir');
//Cetak hasil pendaftaran PDF
Route::get('/hasil/cetak_pdf', 'HomeController@cetak_pdf');

//Export Excel
Route::get('/data/export_excel', 'formulirs@export_excel');
Route::post('/data/import_excel', 'formulirs@import_excel');

// ==========Data Pengguna==========
Route::get('/status/update', 'akun@updateStatus')->name('users.update.status');
Route::get('/Admin/DataAkun','akun@Data_Akun');
//AdminPage/user/add
Route::get('/Admin/pengguna', 'formulirs@data_pengguna')->name('pengguna');
Route::get('/Admin/{id}/edit', 'formulirs@edit')->name('edit');
Route::put('/Admin/pengguna/update/{id}', 'formulirs@update')->name('update');
Route::get('/Admin/{id}/delete','formulirs@destroy');

//===========Edit Password==========
Route::get('/change-password', 'ChangePasswordController@index');
Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');

//=========== Pendaftaran Siswa=====
//Data Pendaftaran
Route::get('/siswa/data', 'DaftarController@data_daftar')->name('dataprofile');
Route::get('/siswa/cari/nama','HomeController@nama');
Route::get('/siswa/cari/nama/akhir','HomeController@result');
//formulir CRUD
Route::post('/formulir/tambah', 'formulirs@tambah_formulirs')->name('formulirt');
Route::get('/formulir/data/tambah', 'formulirs@data_formulir')->name('datas_formulir');

// ========= Promosi =============
// file Upload
Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');
Route::get('/file-upload/delete', 'FileUploadController@destroy');
//fullcalender Admin
Route::get('/fullcalendareventmaster','FullCalendarEventMasterController@index');
Route::post('/fullcalendareventmaster/create','FullCalendarEventMasterController@create');
Route::post('/fullcalendareventmaster/update','FullCalendarEventMasterController@update');
Route::post('/fullcalendareventmaster/delete','FullCalendarEventMasterController@destroy');
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Petugas++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//petugas
Route::get('/Petugas/Pendaftarah/permintaan', 'HomeController@permintaan')->name('permintaan');
Route::get('/datas/petugas/konfirmasi/{id}', 'HomeController@konfirmasi_siswa')->name('konfirmasi_siswa');
Route::get('/datas/tolak/{id}', 'HomeController@konfirmasi_siswa_tolak')->name('konfirmasi_siswa_ditolak');
Route ::put('/StatusCasis/{id}','HomeController@status')->name('statusC');


Route::get('/datas/petugas/permintaan', 'HomeController@petugas_permintaan')->name('petugas_permintaan');


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


// =======================================================================================================







//calendar admin petugas
Route::get('/acara','FullCalendarEventMasterController@calenders');



Route::get('/admin/data_siswa', 'HomeController@data_siswa')->name('dasis');


//admin datatables

Route::get('/admin/users/detail/','akun@user_detail_view')->name('usview');
Route::get('/admin/users/detail/data','akun@user_detail')->name('usdet');
Route::get('/admin/pengguna/delete/{id}','akun@destroy_akun');





//========
Route::get('/admin/datasis/delete/{id}','HomeController@destroy');
//akunEdit

//texteditorprofile
Route::post('/profile','HomeController@summerstore')->name('summernotePersist');





//VIEW formulir
Route::get('/formulir', 'HomeController@formulir')->name('formulir');


//BatalDaftar
Route::get('/casis/daftar/delete/{id}','HomeController@cancelss');