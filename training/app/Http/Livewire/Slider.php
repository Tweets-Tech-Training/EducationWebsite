<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slider as SliderModel ;
use Livewire\WithPagination ;

class Slider extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public  $slider ;
    public $title, $details, $image ,$searchByTitle  ;
    public function updatingSearchByTitle()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.slider.index',
            ['sliders' => SliderModel::orderBy('id','desc')->where('title', 'like', '%' . $this->searchByTitle . '%')->paginate(3)]
        )->extends('dashboard_layout.main');
    }

    public function delete($id)
    {
        SliderModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف السلايدر بنجاح',
        ]);
    }
    public function search(){

    }

    public function resetSearch(){
        $this->searchByTitle = " ";
    }
}
