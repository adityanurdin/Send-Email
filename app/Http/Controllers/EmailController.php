<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmasiMail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index(){
        return view('emails.form_penawaran');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_perusahaan'       =>  'required',
            'alamat_perusahaan'     =>  'required',
            'pic'                   =>  'required',
            'email'                 =>  'required|email',
            'no_telephone'          =>  'required',
            'nama_alat'           =>  'required',
            'merk_alat'           =>  'required',
            'qty'                 =>  'required'
        ]);

        $data = array(
            'nama_perusahaan'       => $request->nama_perusahaan,
            'alamat_perusahaan'     => $request->alamat_perusahaan,
            'pic'                   => $request->pic,
            'email'                 => $request->email,
            'no.telephone'          => $request->no_telephone,
            'nama_alat'             => $request->nama_alat,
            'merk_alat'             => $request->merk_alat,
            'qty'                   => $request->qty,
        );

        $send = array(
            'nama_perusahaan'       => $request->nama_perusahaan,
            'alamat_perusahaan'     => $request->alamat_perusahaan,
            'pic'                   => $request->pic,
            'email'                 => $request->email,
            'no.telephone'          => $request->no_telephone,
            'nama_alat'             => $request->nama_alat,
            'merk_alat'             => $request->merk_alat,
            'qty'                   => $request->qty,
        );

        $mail = new ConfirmasiMail($data);
        Mail::to($data['email'])->send($mail);

        $mail2 = new SendMail($send);
        Mail::to('tolong@fajar.litecloud.id')->send($mail2);

        return back()->with('success','Thanks for contacting us!');
    }
}
