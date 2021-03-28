<?php

namespace App\Http\Livewire\Wallet;

use Livewire\Component;

class Wallet extends Component
{

	public $showTopupWalletModal = false;

	public function topupWallet()
	{
		$this->showTopupWalletModal = true;
	}

    public function render()
    {
        return view('livewire.wallet.index');
    }
}
