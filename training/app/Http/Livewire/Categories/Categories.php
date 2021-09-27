<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public $searchByName  ;
    public function updatingSearchByName()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.categories.index',['categories' => Category::orderBy('id','desc')->where('name', 'like', '%' . $this->searchByName . '%')->paginate(3)]
        )->extends('dashboard_layout.main');
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الصنف بنجاح',
        ]);
    }

    public function search(){
    }

    public function resetSearch(){
        $this->searchByName = " ";
    }
}
