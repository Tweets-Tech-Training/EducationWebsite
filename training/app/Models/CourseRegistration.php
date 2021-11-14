<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;
    protected $table = 'course_registrations';
    protected $fillable=[
      'student_id',
      'course_id',
    ];
    function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }
    function students(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function scopeSearch($query,$data)
    {
        if(isset($data['name'])){
            $query->whereHas('students',function ($q) use ($data) {
                $q->where('name',"LIKE","%".$data['name']."%");
            });
        }
        return $query;
    }

}
