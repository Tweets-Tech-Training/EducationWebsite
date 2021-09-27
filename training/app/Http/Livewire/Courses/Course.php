<?php

namespace App\Http\Livewire\Courses;

use Livewire\Component;
use App\Models\Course as CourseModel ;
use Livewire\WithPagination;

class Course extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.courses.index',
            ['courses' => CourseModel::orderBy('id','desc')->paginate(3)]
        )->extends('dashboard_layout.main');
    }
    public function delete($id)
    {
        CourseModel::find($id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الدورة بنجاح',
        ]);
    }
}
