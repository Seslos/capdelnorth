<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('admin.clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'url'=>'required',
            'img'=>'image'
        ]);
    
        $notaNueva = new Cliente;
        $notaNueva->name = $request->name;
        $notaNueva->url = $request->url;
        $notaNueva->img =base64_encode(file_get_contents($request->file('img')->path()));
        $notaNueva->save();
    
    return redirect()->back()->with('success', 'Imágenes Guardada correctamente');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $cliente->update($request->all());

        if ($request->file('file')) {
            $url =base64_encode(file_get_contents($request->file('file')->path()));
                if ($cliente->img) {
              
                    $cliente->update([
                        'img'=>$url
                    ]);
                }else{
                $cliente->image()->create([
                    'img'=>$url
                ]);     
                }
        }

        return redirect()->route('admin.clientes.edit',$cliente)->with('info','Cliente Actualizadó con éxito');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('admin.clientes.index',$cliente)->with('info',' Cliente se  Elimino con éxito');
    }
}



