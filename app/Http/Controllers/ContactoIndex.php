<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validato;
class ContactoIndex extends Controller
{
    public function index(){
         $contacto=Contacto::all();
        return view('caps.Contacto',compact('contacto'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'descr'=>'required',
        ]);


        $contacto=Contacto::all();
        $correo=new ContactanosMailable($request->all());
        Mail::to('francobelmar0@gmail.com')->send($correo);
        return view('caps.Contacto',compact('contacto'))->with('info','Mensaje enviado');
    }
}
