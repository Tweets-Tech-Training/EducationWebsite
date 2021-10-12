<?php

namespace App\Http\Livewire\Trainer;

use App\Models\Trainer as TrainerModel;
use Livewire\Component;
use Livewire\WithPagination;

class Trainer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $deleteId = '';
    public function render()
    {
        $trainers= TrainerModel::orderby('id','asc')->get();
        return view('livewire.trainer.trainer',
            [
                'trainers' =>$trainers
            ])->extends('dashboard_layout.main');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {

    }
}
