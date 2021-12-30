<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'day',
        'start',
        'end',
        'study_division_id',
    ];
    public function studayDivision()
    {
        return $this->belongsTo(StudyDivision::class,'study_division_id');
    }
   // protected $appends = ['dayStart'];

    public function getDayAndStartAttribute()
    {
       // return Carbon::parse($this->day).$this->start ;
     //   dd(Carbon::parse($this->start)->format('H:i:s'));
       // dd(Carbon::parse($this->day)->format('d/m/Y'). ' '. Carbon::parse($this->start)->format('H:i:s'));
        $data =  Carbon::parse($this->day)->format('d-m-Y') . ' ' . Carbon::parse($this->start)->format('H:i:s');
      // dd(   date('Y/m/d H:i:s', strtotime($data)));
        $date=date('Y-m-d H:i:s', strtotime($data));
        return $date;

       // dd($date);

    }
    public function getDayAndEndAttribute()
    {
        $data =  Carbon::parse($this->day)->format('d-m-Y') . ' ' . Carbon::parse($this->end)->format('H:i:s');
        $date=date('Y-m-d H:i:s', strtotime($data));
        return $date;

    }

}
