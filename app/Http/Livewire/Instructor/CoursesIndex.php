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

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        
        if ($action == 'delete') {
            // This will show the modal on the frontend
            $this->dispatchBrowserEvent('openDeleteModal');
        } elseif ($action == 'showPhotos') {
            // Pass the currently selected item
            $this->emit('getPostId', $this->selectedItem);

            // Show the modal that shows the additional photos
            $this->dispatchBrowserEvent('openModalShowPhotos');
        }
        else {
            $this->emit('getModelId', $this->selectedItem);
            $this->dispatchBrowserEvent('openModal');
        }
    }

    public function delete(Course $course)
    {
        $course->delete();
        $course->image->delete();
        $this->dispatchBrowserEvent('closeDeleteModal');
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
