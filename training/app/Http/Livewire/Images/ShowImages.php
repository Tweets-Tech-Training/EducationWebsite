<?php

namespace App\Http\Livewire\Images;

use App\Models\ImagesGallery as ImagesGalleryModel;
use Livewire\Component;

class ShowImages extends Component
{
    public $imagesGallery ;

    public function mount($id=null){
        return $this->imagesGallery = $id ? ImagesGalleryModel::find($id) : new ImagesGalleryModel();
    }
    public function render()
    {
       $oneImageGallery = $this->imagesGallery;
       $images = $oneImageGallery->images;
        return view('livewire.images.show',
        ['images'=>$images]
        )->extends('dashboard_layout.main');
    }
}
