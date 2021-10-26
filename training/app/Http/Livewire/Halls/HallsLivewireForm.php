<?php

namespace App\Http\Livewire\Halls;

use App\Models\Hall;
use Livewire\Component;
use Livewire\WithFileUploads;

class HallsLivewireForm extends Component
{
    use WithFileUploads ;
    public $hall ;
    public function mount($id = null)
    {
        $this->hall = Hall::find($id);
    }


    public function render()
    {

        return view('livewire.halls.form',[
            'hall' , $this->hall,
        ])->extends('dashboard_layout.main');
    }

}
