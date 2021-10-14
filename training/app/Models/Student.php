<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'gender',
        'password',
        'address',
        'notes',
        'status',
        'image'
    ];

    function courses(){
        return $this->belongsToMany(Course::class,'course_registrations');
    }
}
