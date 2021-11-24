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
    public $paginateNum=4;
    public $deleteId = '';
    public function render()
    {
        if($this->search) {

            $trainers=TrainerModel::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginateNum);
            return view('livewire.trainer.trainer',['trainers'=>$trainers,'id'=>''])->extends('dashboard_layout.main');
        }
            $trainers= TrainerModel::orderby('id','asc')->paginate($this->paginateNum);
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
        TrainerModel::find($this->deleteId)->delete();

    }
}
