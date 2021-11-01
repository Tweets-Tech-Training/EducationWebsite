<?php

namespace App\Http\Livewire\Halls;

use App\Models\Hall;
use App\Models\StudyDivision;
use Livewire\Component;
use Livewire\WithFileUploads;

class HallsLivewireForm extends Component
{
    use WithFileUploads ;
    public $hall , $appointments;
    public function mount($id = null)
    {
        $this->hall = Hall::find($id);
        $this->appointments= StudyDivision::has('hall')->where('hall_id' , $id)->get();
       // dd($this->appointments);
    }
    public function render()
    {
        return view('livewire.halls.form',[
            'hall' , $this->hall,
            'appointments' , $this->appointments,
        ])->extends('dashboard_layout.main');
    }

}
