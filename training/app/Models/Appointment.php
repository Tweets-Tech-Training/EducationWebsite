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
        $data =  Carbon::parse($this->day)->format('d/m/Y') . ' ' . Carbon::parse($this->start)->format('H:i:s');
      // dd(   date('Y/m/d H:i:s', strtotime($data)));
        return date('Y/m/d H:i:s', strtotime($data));

       // dd($date);

    }
    public function getDayAndEndAttribute()
    {
        return Carbon::parse($this->day).$this->end ;
        // dd($date);

    }

}
