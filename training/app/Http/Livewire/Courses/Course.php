<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use App\Models\Course as CourseModel ;
use Livewire\WithPagination;

class Course extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';

    public $search,$paginateNum=4;
    public $deleteId = '';

    public $searchByCourseName  ;
    public function updatingSearchByCourseName()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->search) {
            $courses=CourseModel::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginateNum );
            return view('livewire.courses.index',['courses'=>$courses,'id'=>''])->extends('dashboard_layout.main');
        }
        return view('livewire.courses.index',

            ['courses' => CourseModel::orderBy('id','desc')->paginate($this->paginateNum )]

        )->extends('dashboard_layout.main');
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        CourseModel::find($this->deleteId )->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الدورة بنجاح',
        ]);
    }
    public function search(){
    }

    public function resetSearch(){
        $this->searchByCourseName = " ";
    }
}
