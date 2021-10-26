<?php

namespace App\Http\Livewire\TrainerAdmin;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TrainerCourses extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search , $numCourses ;
    public $deleteId = '';
    public $trainer;
    public function mount()
    {
        $this->trainer = Auth::guard('trainer')->user();

//        $this->courses=$this->trainer->courses()->get();
//          dd( $this->courses);
    }
    public function render()
    {
        $this->numCourses= $this->trainer->courses->count();
        if($this->search){
            $courses=Course::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.trainer-admin.trainer-courses',['courses'=>$courses,'id'=>''])->extends('edomi_dashboard_layout.main');
        }

        return view('livewire.trainer-admin.trainer-courses',[
            'courses'=> $this->trainer->courses()->paginate(10),
            'trainer' =>$this->trainer,
        ])->extends('edomi_dashboard_layout.main');
    }
}
