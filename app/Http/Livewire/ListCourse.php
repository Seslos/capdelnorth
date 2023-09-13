<?php

namespace App\Http\Livewire;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class ListCourse extends Component{    
    
    public function render(){

        $User = Course::with(['users'])->where('user_id',auth()->user()->id)->get();

        return view('livewire.list-course',compact('User'));
    }
}
