<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hall;
use App\Models\StudyDivision;
use Illuminate\Http\Request;
use response;
class CalendarController extends Controller
{
//    public function index(Request $request)
//    {
//        $data= StudyDivision::has('hall')->get();
//        if($request->ajax())
//        {
//            $hall = Hall::find(3);
//
//
//          /*  $data = StudyDivision::whereDate('start_time', '>=', $request->start)
//                ->whereDate('end_time',   '<=', $request->end)
//                ->get(['id' ,'start_time', 'end_time']);*/
//           // return response()->json($data);
//        }
//        //dd($data);
//        return response()->json($data);
//        return view('Admin.calender')->with('data',$data);
//    }

//    public function index()
//    {           $data = StudyDivision::get(['id','name','start_time', 'end_time']);
//        if(request()->ajax())
//        {
//
//
//
//            return \Response::json($data);
//        }
//        return view('Admin.calender')->with('data',$data);
//    }
    public function index()
    {
//        $tasks = StudyDivision::has('hall')->get(['id','name','start_time', 'end_time','created_at'])
//            ->all();


        //$tasks =Appointment::get()->all();
        $tasks=StudyDivision::get();

 //  dd($tasks->appointments);

        return view('Admin.calender', compact('tasks'));
    }
}
