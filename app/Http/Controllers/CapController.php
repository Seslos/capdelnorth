<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapController extends Controller
{
    public function index(){
        return view('caps.index');
    }
}
