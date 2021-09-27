<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;
use App\Models\ImagesGallery  as ImagesGalleryModel;
use App\Models\Images ;
use Livewire\WithFileUploads;

class ImagesGalleryFormLivewire extends Component
{
    use WithFileUploads ;
    public $imagesGallery ;
    public $images = [] ,$imagesTable ,$isUpdate=0;
    protected $rules = [
        'imagesGallery.name'=>'required',
        'imagesGallery.course_name'=>'required',
//        '$imagesTable.*.image'=>'required',
    ];
    protected $imagesTableRules = [
        '$imagesTable.image'=>'required',
    ];


    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        return $this->imagesGallery = $id ? ImagesGalleryModel::find($id) : new ImagesGalleryModel();
    }
    public function render()
    {
        return view('livewire.images.form')->extends('dashboard_layout.main');
    }

    public function save()
    {
        $this->validate($this->rules);
         $this->imagesGallery->save();
        if ($this->images) {
            foreach ($this->images as $image) {
                $filename = $image->store('public/imagesGallery');
                $imageName = $image->hashName();
                    Images::updateOrCreate([
                       'image'=>$imageName,
                       'image_gallery_id' => $this->imagesGallery->id,
                    ]);
            }
        }
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل معرض الصور بنجاح' : 'تم إضافة معرض صور بنجاح',
            'url'=> route('imagesGallery.index'),
        ]);

        if (!$this->imagesGallery->id){
            $this->resetForm();
        }

    }

    public function resetForm(){
        $this->imagesGallery = new ImagesGalleryModel() ;
        $this->images = [] ;
    }
}
