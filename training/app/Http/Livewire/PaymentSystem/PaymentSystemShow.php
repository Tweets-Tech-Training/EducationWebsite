<?php

namespace App\Http\Livewire\PaymentSystem;

use Livewire\Component;

class PaymentSystemShow extends Component
{
    public $payment;
    public function mount($id = null)
    {
        $this->payment=\App\Models\PaymentSystem::findOrFail($id);
    }
    public function render()
    {

        return view('livewire.payment-system.payment-system-show',[
            'payment' => $this->payment,
        ])->extends('dashboard_layout.main');
    }
}
