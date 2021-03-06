<?php

namespace App\Http\Livewire\Courses;


use App\Models\Category;
use App\Models\Course ;
use App\Models\Trainer;
use Livewire\Component;
use Livewire\WithFileUploads;

class CourseFormLivewire extends Component
{
    use WithFileUploads ;
    public $image ,$course ,$detailsEditor , $isUpdate=0;
    protected $rules = [
        'course.name'=>'required',
        'course.course_type'=>'required',
        'course.category_id'=>'required',
        'course.trainer_id'=>'required',
        'course.place'=>'required',
        'course.lectures_num'=>'required|numeric',
        'course.lecture_interval'=>'required',
        'course.start_date'=>'required |date',
        'course.end_date'=>'required|date',
        'course.details'=>'required',
        'course.price'=>'required|numeric',
        'course.image'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        return $this->course = $id ? Course::find($id) : new Course();

    }
    public function render()
    {
        return view('livewire.courses.form',[
            'categories'=>Category::all(),
            'trainers'=>Trainer::all(),
            ])->extends('dashboard_layout.main');
    }

    public function save()
    {
        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imageName = $this->image->hashName();
            $this->course->image = $imageName;
        }
        $this->validate();
        $this->course->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الدورة بنجاح' : 'تم إضافة الدورة بنجاح',
            'url'=> route('courses.index'),
            ]);
    }
}
