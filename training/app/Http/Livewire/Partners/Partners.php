<?php

namespace App\Http\Livewire\Partners;

use App\Models\Partner as PartnerModel;
use Livewire\Component;
use Livewire\WithPagination;

class Partners extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.partners.index',
            ['partners' => PartnerModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }

    public function delete($id)
    {
        PartnerModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الشريك بنجاح',
        ]);
    }
}
