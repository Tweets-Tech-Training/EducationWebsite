<?php

namespace App\Http\Livewire\Partners;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Partner as PartnerModel ;

class PartnersFormLivewire extends Component
{
    use WithFileUploads ;
    public $partner ,$image ,$isUpdate=1;
    protected $rules = [
        'partner.title'=>'required',
        'partner.link'=>'required| url',
        'partner.image'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        return $this->partner = $id ? PartnerModel::find($id) : new PartnerModel();

    }

    public function render()
    {
        return view('livewire.partners.form')->extends('dashboard_layout.main');;
    }

    public function save()
    {

        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imageName = $this->image->hashName();
            $this->partner->image = $imageName;
        }
        $this->validate();
        $this->partner->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل قسم الشركاء بنجاح' : 'تم الإضافة إلى قسم الشركاء بنجاح',
            'url'=> route('partners.index'),
        ]);

    }
}
