<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'icon'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
//    public function scopeGetCourses(){
//        // return $this->hasMany(Post::class)->where('published',1)->where('category_id',$category_id);
//        return  $this->courses()->where(['category_id'=>$this->id]);
//    }
    public function scopePublishedCategory(){
        return  $this->courses()->where(['category_id'=>$this->id]);
    }
}
