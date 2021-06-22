<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendmail(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required|email',
           'message'=>'required'
        ]);
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        );

        Mail::to('ashiqfardus@hotmail.com')->cc('ashiqtechsolutions@gmail.com')->send(new SendMail($data));
        return redirect()->back()->with('message', 'Thanks for contacting us.We will get back to you soon.');
    }
}
