<?php

namespace App\Http\Livewire\StudyDivisions;

use Livewire\Component;

class StudyDivision extends Component
{
    public function render()
    {

        return view('livewire.study-divisions.study-division')->extends('dashboard_layout.main');
    }
}
