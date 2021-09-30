<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;
    protected $table = 'course_registrations';
    protected $fillable=[
      'user_id',
      'gender',
      'mobile',
      'address',
      'course_id',
    ];
}
