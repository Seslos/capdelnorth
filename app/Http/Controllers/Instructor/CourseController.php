<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Support\Facades\Storage;
class CourseController extends Controller{
    public function __construct()
    {
        $this->middleware('can:Leer cursos')->only('index');
        $this->middleware('can:Crear cursos')->only('create','store');
        $this->middleware('can:Actualizar cursos')->only('edit','update','goals');
        $this->middleware('can:Eliminar cursos')->only('destroy');

    }
    public function index(){
        return view('instructor.courses.index');
    }
    public function create(){
        $categories= Category::pluck('name','id');
        $levels= Level::pluck('name','id');
        $prices= Price::pluck('name','id');
        return view('instructor.courses.create',compact('categories','levels','prices'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:courses',
            'subtitle'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'level_id'=>'required',
            'price_id'=>'required',
            'file'=>'image'
        ]);
   
        $course = Course::create($request->all());
    
        if ($request->file('file')) {
            $url =base64_encode(file_get_contents($request->file('file')->path()));
            $course->image()->create([
                'url'=>$url
            ]);
            # code...
        }    
        return redirect()->route('instructor.courses.edit',$course); 


    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('instructor.courses.show',compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $this->authorize('dicatated',$course);

        $categories= Category::pluck('name','id');
        $levels= Level::pluck('name','id');
        $prices= Price::pluck('name','id');
        return view('instructor.courses.edit',compact('course','categories','levels','prices'));

    }

    public function update(Request $request,Course $course){
        $this->authorize('dicatated',$course);

        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:courses,slug,'.$course->id,
            'subtitle'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'level_id'=>'required',
            'price_id'=>'required',
            'file'=>'image'
        ]);

        $course->update($request->all());
        if ($request->file('file')) {
            $url =base64_encode(file_get_contents($request->file('file')->path()));
                if ($course->image) {
              
                    $course->image->update([
                        'url'=>$url
                    ]);
                }else{
                $course->image()->create([
                    'url'=>$url
                ]);     
                }
        }
        return redirect()->route('instructor.courses.edit',$course)->with('info','El Curso  se Actualizo con éxito');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function deleteId($id)
{
$this->deleteId = $id;
}
    public function destroy(Course $course)
    {
        $course->delete();
        $course->image->delete();
        return redirect()->route('instructor.courses.index')->with('info','El Curso  se Elimino con éxito');
    }
    public function goals(Course $course){
        $this->authorize('dicatated',$course);

        return view('instructor.courses.goals',compact('course'));
    }
    public function status(Course $course){
        $course->status =2;
        $course->save();
      
            if ($course->observation) {
                $course->observation->delete();
            }
        return redirect()->route('instructor.courses.edit',compact('course'));

    }



    public function status2(Course $course){
        $course->status=1;
        $course->save();
    
            if ($course->observation) {
                $course->observation->delete();
            }
        return redirect()->route('instructor.courses.edit',compact('course'));

    }


    public function observation(Course $course)
    {
return view('instructor.courses.observation',compact('course'));
    }
}
