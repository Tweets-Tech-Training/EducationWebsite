<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use App\Models\Setting as SettingModel ;
use Livewire\WithPagination;

class Settings extends Component
{
    use WithPagination ;
    protected $paginationTheme = " bootstrap";
    public function render()
    {
        return view('livewire.settings.index',
            ['settings' => SettingModel::first()]
        )->extends('dashboard_layout.main');

    }

    public function delete($id)
    {
        SettingModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الإعدادات بنجاح',
        ]);
    }
}
