<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendmailController extends Controller
{
    public function index(Request $request)
    {

        $rules = [
            'fullName' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email',
        ];

        $validated = $request->validate($rules);

        $dataMail = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'pertanyaan' => $request->pertanyaan,
        ];

        Mail::to('akunkeduaiyas@gmail.com')->send(new sendMail($dataMail));
        return redirect('/')->with('success', 'Pesan Email Berhasil Terkirim :D');
    }
}
