<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class Client extends Component
{
    public function render()
    {

        $Cliente=Cliente::all();
        return view('livewire.client',compact('Cliente'));
    }
}
