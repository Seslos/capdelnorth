<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){
        $contactos=Contacto::all();
        return view('admin.contacto.index',compact('contactos'));
   
    }   

}
