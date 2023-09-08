<?php
namespace App\Http\Livewire\Instructor;
use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;

class CoursesIndex extends Component{
   use WithPagination;
    public $action;
    public $selectedItem;
    public $search;

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent(Course $course)
    {
        $course->delete();
        $course->image->delete();
        session()->flash('message','Student Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }



    
    public function render(){

        $courses =Course::where('title','LIKE','%'.$this->search.'%')
        ->where('user_id',auth()->user()->id)
        ->latest('id')
        ->paginate(8);

        return view('livewire.instructor.courses-index',compact('courses'));
    }


    public function limpiar_page(){
        $this->resetPage();
    }

}
