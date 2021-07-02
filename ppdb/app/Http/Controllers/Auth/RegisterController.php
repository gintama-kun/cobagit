<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Anhskohbo\NoCaptcha\Rules\CaptchaRule;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nama_panggilan' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['string', 'max:255'],

            'nisn' => 'max:255',
            'nip' => 'max:255',
            'asal_sekolah' => 'max:255',
            'no_hp' =>  'max:255',
            'alamat' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => ['required','captcha'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(array $data )
    {

      
        return User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'nama_panggilan' => $data['nama_panggilan'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tgl_lahir' => $data['tgl_lahir'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'nisn' => $data['nisn'],
            'nip' => $data['nip'],
            'asal_sekolah' => $data['asal_sekolah'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
           
            
            'g-recaptcha-response' => 'captcha',
            
        ]);
        
    }

    // protected function validator(array $data){
    //     return Validator::make($data, [
    //         'name' => ['required'],
    //         'no_hp' => ['required'],
    //         'alamat' => ['required'],
    //         'email' => ['required|email'],
    //         'password' => ['required'],
    //         'g-recaptcha-response' => 'captcha',
    //     ]);
    // }
}
