<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = [
        'name',
        'email',
        'course_id',
        'mobile',
        'password',
        'image'
    ];
    protected $hidden = [
        'password',
    ];
}