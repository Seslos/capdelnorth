<?php

namespace App\Http\Livewire;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class ListCourse extends Component{    
    
    public function render(Course $Course){

      // $User = Course::with(['users'])->where('user_id',auth()->user()->id)->get();

     //   $User->Course(auth()->user()->id);
       // $course->students()->where(auth()->user()->id);

       $c = Course::with('students')->get();
    //   $c=Course::find(auth()->user()->id)->students()->count();
dd($c);
        return view('livewire.list-course',compact('course'));
    }
}
