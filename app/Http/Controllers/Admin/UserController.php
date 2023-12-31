<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class UserController extends Controller{
    public function __construct(){
        $this->middleware('can:Leer usuarios')->only('index');
        $this->middleware('can:Editar usuarios')->only('edit','update','store');
    }
    public function index(){
       // $roles = Role::all();
        return view('admin.users.index');
    }
    public function edit(User $user){
        $roles =Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }
    public function show(User $user){
        $course=Course::all();
        return view('admin.users.show',compact('user','course'));
    }
    public function update(Request $request,User $user){
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user);
    }
    public function store(Course $course){

        $course->students()->attach(auth()->user()->id);
    }

}
