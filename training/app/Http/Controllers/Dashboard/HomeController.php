<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
//        $student=Student
//           ::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
//            ->groupBy('year', 'month')
//            ->orderBy('year', 'desc')
//            ->get();
        $students=Student::
        select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(created_at) as month_name")
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->get()
            ->toArray();
       // $student =Student::whereYear('created_at',Carbon::now()->year)->get();
        //dd($student);
        $chartjs = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['January', 'February','March','April' ,'May' , 'June' ,'July','August','September', 'October',
                'November','December'])
            ->datasets([
                [
                    "label" => "عدد الطلاب خلال الشهر ",
                    'backgroundColor' => ['#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB','#7267CB'],
                    'data' => [
                      //  $students->count
                        Student::whereYear('created_at',Carbon::now()->year)->whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '01')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '02')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '03')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '04')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '05')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '06')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '07')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '08')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '09')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '10')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '11')->count(),
                        Student::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at', '12')->count(),
                    ]

                ],

            ])
            ->options([]);

        return view('livewire.dashboard.dashboard', compact('chartjs'));

    }
}
