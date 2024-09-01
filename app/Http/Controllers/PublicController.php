<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function emailed()
    {
        return view('contacts');
    }


    public function contactSubmit(Request $request)
    { //ndependency injection
        // dd($request->all()); 

        $name = $request->input('name');
        $email = $request->email;
        $info = $request->info;
        $message = $request->message;
        $content = compact('name', 'email', 'info', 'message');
        // dd($name,$email,$info);
        // dd($content);





        try {

            Mail::to($email)->send(new ContactMail($content)); //object composition

        } catch (Exception $error) {
// dd($error);
            return redirect()->back()->with('error', 'Ci scusiamo per il disagio, roprova più tardi');
        }

         return redirect(route('Home'))->with('emailSent', 'Abbiamo ricevuto la tua mail, ticontatteremo il prima possibile');
    }
}
