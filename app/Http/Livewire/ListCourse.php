<?php
namespace App\Http\Livewire;
use App\Models\Course;

use Livewire\Component;
class ListCourse extends Component{    
    public function render(Course $Course){
       $course =  Course::has('students')->where('user_id',auth()->user()->id)->get();  
        return view('livewire.list-course',compact('course'));
    }
}
