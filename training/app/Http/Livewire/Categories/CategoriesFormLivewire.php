<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class CategoriesFormLivewire extends Component
{
    use WithFileUploads ;
    public  $category;
    public  $image , $isUpdate=0 ;
    protected $rules = [
        'category.name'=>'required',
        'category.image'=>'required',
        'category.icon'=>'required',
        'category.iconColor'=>'required',
        'category.color'=>'required',
    ];

    public function mount($id=null)
    {
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        $this->category = $id?Category::find($id):new Category();
    }
    public function render()
    {
        return view('livewire.categories.form')->extends('dashboard_layout.main');;
    }

    public function save()
    {

        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imagename = $this->image->hashName();
            $this->category->image = $imagename;
        }
        $this->validate();
        $this->category->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الأصناف بنجاح' : 'تم إضافة الأصناف بنجاح',
            'url'=>  route('categories.index'),
        ]);


    }
}
