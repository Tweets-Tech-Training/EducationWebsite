<?php

namespace App\Http\Livewire\StudyDivisions;

use Livewire\Component;
use App\Models\StudyDivision as StudyDivisionModel ;

class StudyDivision extends Component
{
    protected $paginationTheme = 'bootstrap';
    public  $studyDivisions ;
    public $searchByName  ;
    public $search;
    public $deleteId = '';
    public function updatingSearchByName()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.study-divisions.index',
        ['divisions' => StudyDivisionModel::orderBy('id','desc')->where('name', 'like', '%' . $this->searchByName . '%')->paginate(10)])
            ->extends('dashboard_layout.main');
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        StudyDivisionModel::find($this->deleteId )->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الشعبة بنجاح',
        ]);
    }

    public function search(){
    }

    public function resetSearch(){
        $this->searchByName = " ";
    }
}
