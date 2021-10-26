<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Student as StudentModel;
use Livewire\WithPagination;

class Student extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $deleteId = '';
    public function render()
    {
        if($this->search) {
            $students=StudentModel::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.student.student',['students'=>$students,'id'=>''])->extends('dashboard_layout.main');
        }
            $students = StudentModel::orderBy('id', 'asc')->paginate(10);
            return view('livewire.student.student',
                ['students' => $students])->extends('dashboard_layout.main');

    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        StudentModel::find($this->deleteId)->delete();
    }
}
