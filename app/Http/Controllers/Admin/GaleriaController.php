<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller{
    public function index(){
        $galerias=Galeria::all();
        return view('admin.galeria.index',compact('galerias'));
    }   
    public function create(){
        return view('admin.galeria.create');
    }  
    public function store(Request $request){


        $files = [];
        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->base64_encode(file_get_contents($request->file('image')->path()));
                $files[] = $name;  
            }
         }
  
         $file= new Galeria();
         $file->url = $files;
         $file->save();

    return redirect()->back()->with('success', 'Imágenes Guardada correctamente');

                # code...
            
    }  
}
