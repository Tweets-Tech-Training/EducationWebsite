<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use App\Models\StudyDivision;
use Livewire\Component;

class Calendar extends Component
{
    public $events = '';
    public function mount($id = 3)
    {
        $this->hall = Hall::find(3);
        $this->events= StudyDivision::has('hall')->where('hall_id' , $id)->get();
        // dd($this->appointments);
    }

    public function render()
    {
//        $events = StudyDivision::get();

        $this->events = json_encode($this->events);
        return view('livewire.calendar',[
            'events' => $this->events,
        ])->extends('dashboard_layout.main');
    }


    public function getevent()
    {
        $events = StudyDivision::select('id','title','start')->get();

        return  json_encode($events);
    }

}
