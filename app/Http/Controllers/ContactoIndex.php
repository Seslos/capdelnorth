<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoIndex extends Controller
{
    public function index(){
        return view('caps.Contacto');
    }
}
