<?php

namespace App\Http\Controllers;

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

    public function index()
    {           $data = StudyDivision::get(['id','name','start_time', 'end_time']);
        if(request()->ajax())
        {



            return \Response::json($data);
        }
        return view('Admin.calender')->with('data',$data);
    }
    public function calendar()
    {

        $calendar= StudyDivision::latest()->get();

        return response()->json($calendar);
    }
}
