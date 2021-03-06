<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{

    use HasFactory;
    protected $table = 'halls';
    protected $fillable = [
        'name',
        'capacity',
        'computerized'
    ];



    public function studyDivisions(){
        return $this->hasMany(StudyDivision::class);
    }
    public function reservedHallsList(){
//        hall has many reserved time in list
        return $this->hasMany(ReservedHallList::class,'hall_id');
    }

}
