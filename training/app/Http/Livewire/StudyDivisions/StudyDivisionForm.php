<?php

namespace App\Http\Livewire\StudyDivisions;

use App\Models\Course;
use App\Models\Hall;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use \App\Models\StudyDivision ;

class StudyDivisionForm extends Component
{
    public $studyDivision , $isUpdate=0, $course,$start_time , $end_time ,$start_time1 , $end_time1,$halls;
    protected $rules = [
        'studyDivision.name'=>'required',
        'studyDivision.course_id'=>'nullable',
        'studyDivision.students_number'=>'required|numeric',
        'studyDivision.hall_id'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
         $this->studyDivision = $id ? StudyDivision::find($id) : new StudyDivision();
       $id ? $this->start_time=  $this->studyDivision->start_time : $this->start_time='01:00:00';
        $id ? $this->end_time=  $this->studyDivision->end_time : $this->end_time='01:00:00';
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
        $this->start_time1 = date('H:i:s', strtotime($this->start_time));
     //   $start_time = str_replace('a.m.','',$this->start_time);
       // $end_time = str_replace('H:i','',$this->end_time);
        $this->end_time1 = date('H:i:s', strtotime($this->end_time));
//        dd($start_time,$end_time);
        $this->studyDivision->save();
        $this->studyDivision->update([
            'start_time' =>$this->start_time1,
            'end_time'  => $this->end_time1
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الشعبة بنجاح' : 'تم إضافة الشعبة بنجاح',
            'url'=> route('studyDivision.index'),
        ]);
    }


    public function updatedEndTime($data){
        $this->start_time1 = date('H:i:s', strtotime($this->start_time));
        $this->end_time1 = date('H:i:s', strtotime($this->end_time));

//        $this->halls= DB::table('halls')
//            ->join('study_divisions', 'study_divisions.hall_id', '=', 'halls.id')
//            ->where('start_time', '<>', $this->start_time1)
//            ->get();   //  return study_divisions


//        $this->halls= DB::table('study_divisions')
//            ->join('halls', 'halls.id', '=', 'study_divisions.hall_id')
//            ->where('start_time', '!=', $this->start_time1)
//            ->where('end_time', '!=', $this->end_time1)
//            ->get();  // return halls

       // dd($this->start_time1,$this->end_time1);
//        $this->halls= DB::table('halls')
//                    ->join('study_divisions', 'study_divisions.hall_id', '=', 'halls.id')
//                    ->where('start_time', '<>', $this->start_time1)
//                    ->where('end_time', '<>', $this->end_time1)
//                    ->select('halls.capacity','halls.name','halls.id')
//                    ->get();   // return all halls that have relation
//

//        $this->halls= DB::table('halls')
//            ->join('study_divisions', 'halls.id', '=', 'study_divisions.hall_id')
//            ->where('start_time', '!=', $this->start_time1)
//            ->where('end_time', '!=', $this->end_time1)
//            ->select('halls.capacity','halls.name','halls.id')
//            ->get(); // return all halls with repeat


//        $this->halls= DB::table('study_divisions')
//            ->join('halls', 'study_divisions.hall_id', '=', 'halls.id')
//            ->where('start_time', '!=', $this->start_time1)
//            ->where('end_time', '!=', $this->end_time1)
//            ->select('halls.capacity','halls.name','halls.id')
//            ->get();



//        $this->halls= DB::table('halls')
//            ->RightJoin('study_divisions', 'study_divisions.hall_id', '=', 'halls.id')
//            ->where('start_time', '!=', $this->start_time1)
//            ->where('end_time', '!=', $this->end_time1)
//            ->get();

        $this->halls = DB::table('halls')
            ->RightJoin('study_divisions', 'halls.id', '=', 'study_divisions.hall_id')
            ->where('start_time', '!=', $this->start_time1)
            ->where('end_time', '!=', $this->end_time1)
            ->select('halls.capacity','halls.name','halls.id')
            ->get();


//        $this->halls = DB::table('study_divisions')
//            ->join('halls', 'study_divisions.hall_id', '=', 'halls.id')
//            ->where('start_time', '!=', $this->start_time1)
//            ->where('end_time', '!=', $this->end_time1)
//            ->get();


        dd($this->halls);

    }
}
