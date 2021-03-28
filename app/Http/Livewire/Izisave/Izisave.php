<?php

namespace App\Http\Livewire\Izisave;

use Livewire\Component;

class Izisave extends Component
{


    public $card;

    public function mount()
    {
        $this->card = '84,500';
    }

    public function render()
    {
        return view('livewire.izisave.index');
    }
}
