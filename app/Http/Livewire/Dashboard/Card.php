<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Card extends Component
{


    public $card;

    public function mount($card)
    {
        $this->card = $card;
    }


    public function render()
    {
        return view('livewire.dashboard.card');
    }
}
