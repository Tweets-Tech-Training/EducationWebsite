<?php

namespace App\Http\Livewire\StudyDivisions;

use App\Models\Appointment;
use App\Models\Course;
use App\Models\Hall;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use \App\Models\StudyDivision ;

class StudyDivisionForm extends Component
{
    public $studyDivision , $isUpdate=0, $course,$start_time , $end_time ,$start_time1 , $end_time1,$halls;
    public $appointment=[
        ['day'=>null,'start'=>null,'end'=>null,'study_division_id'=>null]
    ];
    protected $rules = [
        'studyDivision.name'=>'required',
        'studyDivision.course_id'=>'nullable',
        'studyDivision.students_number'=>'required|numeric',
        'studyDivision.hall_id'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
         $this->studyDivision = $id ? StudyDivision::find($id) : new StudyDivision();
         $this->appointment= $id?$this->studyDivision->appointments()->get()->toArray(): $this->appointment;
       $id ? $this->start_time=   $this->appointment->start : $this->start_time='01:00:00';
        $id ? $this->end_time=   $this->appointment->end : $this->end_time='01:00:00';
        $this->halls =Hall::all();
    }
    public function render()
    {

        return view('livewire.study-divisions.form',
            [
                'courses'=>Course::all(),
            ])->extends('dashboard_layout.main');
    }
    public function save()
    {
        $this->validate();

     //   $start_time = str_replace('a.m.','',$this->start_time);
       // $end_time = str_replace('H:i','',$this->end_time);
//        $this->end_time1 = date('H:i:s', strtotime($this->end_time));
//        dd($start_time,$end_time);
        $this->studyDivision->save();

        foreach ($this->appointment as $index => $price ){
            $this->appointment[$index]['start'] = date('H:i:s', strtotime($this->start_time));
            $this->appointment[$index]['end'] = date('H:i:s', strtotime($this->end_time));
            Appointment::updateOrCreate([
                'day' => $this->appointment[$index]['day'],
                'start' =>$this->appointment[$index]['start'],
                'end' =>$this->appointment[$index]['end'],
                'study_division_id'  => $this->studyDivision->id,
            ]);
        }

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الشعبة بنجاح' : 'تم إضافة الشعبة بنجاح',
            'url'=> route('studyDivision.index'),
        ]);
    }

    public function addRow (){
        $this->appointment[]=['day'=>null,'start'=>null,'end'=>null,'study_division_id'=>null];

    }

    public function deleteRaw ()
    {
        array_pop($this->appointment);
    }


}
