<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\Course;
use Illuminate\Http\Request;
use App\Models\Course as CourseModel;

class CoursesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = \App\Models\Course::get();
        return $this->sendResponse(Course::collection($courses), 'Products retrieved successfully.');
//        return response()->json([
//            "success" => true,
//            "message" => "Course List",
//            "data" => $courses
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = CourseModel::find($id);
        if(!$course){
            return $this->sendError('لا يوجد كورس ', ['error' => 'تأكد من البيانات المدخلة ']);
        }
        return $this->sendResponse(new Course($course), ' عرض تفاصيل الكورس  ');


      //  return ;
       /* $course = CourseModel::find($id);
        if (is_null($course)) {
            return response()->json([
                "error" => false,
                "message" => " لا يوجد بيانات ",
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "بيانات الكورس بالتفصيل ",
            "data" => $course
        ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
