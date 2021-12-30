<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    protected $table = 'students';

    protected $guard = 'student';

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
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    function courses(){
        return $this->belongsToMany(Course::class,'course_registrations');
    }

    public function payments()
    {
        return $this->hasMany(PaymentSystem::class);
    }
}
