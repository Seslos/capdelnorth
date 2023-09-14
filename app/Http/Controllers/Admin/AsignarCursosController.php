<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Course;
class AsignarCursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('can:Leer usuarios')->only('index');
        $this->middleware('can:Editar usuarios')->only('edit','update');
    }
    public function index(){
       // $roles = Role::all();
        return view('admin.AsignarCurso.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        $Course= Course::all();
        return view('admin.AsignarCurso.edit',compact('user','Course'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Course $Course)
    {
        $request->validate([
            'name'=>'required',
            'permissions' => 'required'
            ]);



            $Course->update([
                'name'=> $request->name

            ]);
            $Course->permissions()->sync($request->permissions);
            return redirect()->route('admin.roles.edit',$Course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
