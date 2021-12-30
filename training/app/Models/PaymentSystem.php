<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSystem extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [

        'remaining_amount',
        'course_id',
        'student_id',
        'note',
        'payment_amount',

    ];

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'payment_id', 'id');
    }
}
