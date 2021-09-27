<?php

namespace App\Http\Livewire\AboutUs;

use Livewire\Component;
use App\Models\AboutUs as AboutUsMpodel ;
use Livewire\WithPagination;


class AboutUs extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.about-us.index', ['aboutUs' => AboutUsMpodel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }
}
