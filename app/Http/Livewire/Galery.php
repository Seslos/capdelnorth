<?php

namespace App\Http\Livewire;

use App\Models\Galeria;
use Livewire\Component;

class Galery extends Component
{
    public function render()
    {
        $Galery=Galeria::all();
        return view('livewire.galery',compact('Galery'));
    }
}
