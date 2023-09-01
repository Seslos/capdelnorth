<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes=Cliente::all();
        return view('admin.clientes.index',compact('clientes'));
   
    }   

}
