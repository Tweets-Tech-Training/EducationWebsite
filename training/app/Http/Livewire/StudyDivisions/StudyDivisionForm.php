<?php

namespace App\Http\Livewire\StudyDivisions;

use App\Models\Course;
use App\Models\Hall;
use Livewire\Component;
use \App\Models\StudyDivision ;

class StudyDivisionForm extends Component
{
    public $studyDivision , $isUpdate=0, $course,$name_momen ;
    protected $rules = [
        'studyDivision.name'=>'required',
        'studyDivision.start_time'=>'required| date_format:H:i',
        'studyDivision.end_time'=>'required |date_format:H:i',
        'studyDivision.course_id'=>'required',
        'studyDivision.students_number'=>'required|numeric',
        'studyDivision.hall_id'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        return $this->studyDivision = $id ? StudyDivision::find($id) : new StudyDivision();

    }
    public function render()
    {
        return view('livewire.study-divisions.form',
            [
                'courses'=>Course::all(),
                'halls'=>Hall::all(),
            ])->extends('dashboard_layout.main');
    }
    public function save()
    {
        $this->validate();
        dd($this->studyDivision);
        $this->studyDivision->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الشعبة بنجاح' : 'تم إضافة الشعبة بنجاح',
            'url'=> route('studyDivision.index'),
        ]);
    }
}
