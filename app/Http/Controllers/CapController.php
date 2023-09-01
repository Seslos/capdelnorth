<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapController extends Controller
{
    public function index(){
        return view('caps.index');
    }
    public function show(){
        return view('caps.galeria');
    }

    public function cliente(){
        return view('caps.cliente');
    }
}
