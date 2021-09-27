<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;
use App\Models\ImagesGallery as ImagesGalleryModel ;
use Livewire\WithPagination;

class ImagesGallery extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.images.index',
        ['imagesGallery'=> ImagesGalleryModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }

    public function delete($id)
    {
        ImagesGalleryModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف معرض الصور بنجاح',
        ]);
    }

    public function show($id){
        return view('livewire.images.show')->extends('dashboard_layout.main');
    }
}
