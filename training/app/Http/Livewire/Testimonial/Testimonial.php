<?php

namespace App\Http\Livewire\Testimonial;

use Livewire\Component;
use App\Models\Testimonial as TestimonialModel ;
use Livewire\WithPagination;

class Testimonial extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.testimonial.index',
        ['testimonials'=> TestimonialModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }

    public function delete($id)
    {
        TestimonialModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الرأي بنجاح',
        ]);
    }
}
