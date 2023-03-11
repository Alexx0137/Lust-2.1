<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPageRequest;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|max:2',
            'email' => 'required|email',
            'telephone' => 'required|max:12',
            'message' => 'required|max:500',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to(['gerencia@luststudio.co', 'luststudios2023@gmail.com'])->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Tu mensaje ha sido enviado');
    }
}


