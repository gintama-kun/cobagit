<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use RealRashid\SweetAlert\Facades\Alert;
use SweetAlert;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('zandri081@gmail.com')->send(new SendMail($data));
     return redirect('/blocked')->with('success', 'Terima Kasih telah menghubungi kami!');

    }
}
