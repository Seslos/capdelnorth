<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller{
    public function __construct(){
        $this->middleware('can:Lista role')->only('index');
        $this->middleware('can:Crear Role')->only('create','store');
        $this->middleware('can:Editar Role')->only('edit','update');
        $this->middleware('can:Eliminar Role')->only('destroy');
    }
    public function index(){
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }
    public function create(){
        $permissions= Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }
    public function store(Request $request){
            $request->validate([
            'name'=>'required',
            'permissions' => 'required'
            ]);
            $role =Role::create([
            'name'=>$request->name
            ]);
            $role->permissions()->attach($request->permissions);
            return redirect()->route('admin.roles.index')->with('info','El rol se creo satisfactoriamente');   
    }
    public function show(Role $role){
        return view('admin.roles.show',compact('role'));
    }
    public function edit(Role $role){
        
        $permissions= Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }
    public function update(Request $request, Role $role){
        $request->validate([
            'name'=>'required',
            'permissions' => 'required'
            ]);
            $role->update([
                'name'=> $request->name
            ]);
            $role->permissions()->sync($request->permissions);
            return redirect()->route('admin.roles.edit',$role);
    }
    public function destroy(Role $role){
        $role->delete();
        return Redirect()->route('admin.roles.index')->with('info','Elrol se elimino con éxito');
        }
}
