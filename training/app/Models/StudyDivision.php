<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyDivision extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'course_id',
        'students_number',
        'hall_id',
    ];
//        protected $appends = ['start_time', 'end_time'];
//
//    public function getStartTimeAttribute($start_time)
//    {
//            return  Carbon::parse($start_time)->format('h:i');
//    }
//    public function getEndTimeAttribute($end_time)
//    {
//        return  Carbon::parse($end_time)->format('h:i');
//    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function hall(){
        return $this->belongsTo(Hall::class);
    }
}
