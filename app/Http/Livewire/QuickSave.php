<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuickSave extends Component
{


    public $quicksave = false;


	public function mount(){
		$this->quicksave = false;
	}

	public function quickTrigger()
	{
		return 'tijjvni';
	}

    public function render()
    {
        return view('livewire.quick-save');
    }
}
