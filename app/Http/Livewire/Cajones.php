<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cajones extends Component
{
  public  $name='Jose Javier';
    public function mount(){
        $this->name='Reyes Macias';
    }
    public function render()
    {
        return view('livewire.cajones');
    }
}
