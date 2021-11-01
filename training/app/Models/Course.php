<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    function students(){
        return $this->belongsToMany(Student::class,'course_registrations');
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function studyDivisions(){
        return $this->hasMany(StudyDivision::class);

    }

    public function payments()
    {
        return $this->hasMany(PaymentSystem::class);
    }
}
