<?php

namespace App\Http\Livewire\Testimonial;

use Livewire\Component;
use App\Models\Testimonial as TestimonialModel ;
use Livewire\WithPagination;

class Testimonial extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $deleteId = '';

    public function render()
    {
        if($this->search) {

            $testimonials=TestimonialModel::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.testimonial.index',['testimonials'=>$testimonials,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.testimonial.index',
        ['testimonials'=> TestimonialModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        TestimonialModel::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الرأي بنجاح',
        ]);
    }
}
