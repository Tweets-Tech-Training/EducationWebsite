<?php

namespace App\Models;

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
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function hall(){
        return $this->belongsTo(Hall::class);
    }
}
