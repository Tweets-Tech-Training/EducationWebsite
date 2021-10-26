<?php

namespace App\Http\Livewire\Partners;

use App\Models\Partner as PartnerModel;
use Livewire\Component;
use Livewire\WithPagination;

class Partners extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $deleteId = '';
    public function render()
    {

        if($this->search) {
            $partners=PartnerModel::orderBy('id', 'desc')->where('title', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.partners.index',['partners'=>$partners,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.partners.index',
            ['partners' => PartnerModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        PartnerModel::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الشريك بنجاح',
        ]);
    }
}
