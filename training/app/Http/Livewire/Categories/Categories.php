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
    public $search;
    public $deleteId = '';
    public function updatingSearchByName()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->search) {

            $categories=Category::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.categories.index',['categories'=>$categories,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.categories.index',['categories' => Category::orderBy('id','desc')->paginate(10)]
        )->extends('dashboard_layout.main');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        Category::find( $this->deleteId)->delete();
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
