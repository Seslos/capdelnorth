<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      
      $contacto=Contacto::all();
        return view('admin.contacto.index',compact('contacto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'contacto'=>'required'
        ]);
    
        $notaNueva = new Contacto;
        $notaNueva->name = $request->name;
        $notaNueva->contacto = $request->contacto;
        $notaNueva->save();
    
    return redirect()->back()->with('success', 'Contacto Guardada correctamente');
    
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
    public function edit(Contacto $contacto)
    {
        return view('admin.contacto.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
            'name'=>'required',
            'contacto'=>'required'
        ]);
        $contacto->update($request->all());
        return redirect()->route('admin.contacto.edit',$contacto)->with('info','Contacto Actualizadó con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('admin.contacto.index',$contacto)->with('info',' Contacto se  Elimino con éxito');
    }
}
