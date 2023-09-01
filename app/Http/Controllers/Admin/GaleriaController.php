<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index(){
        $galerias=Galeria::all();
        return view('admin.galeria.index',compact('galerias'));
   
    }   
}
