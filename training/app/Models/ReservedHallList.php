<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservedHallList extends Model
{
    use HasFactory;
     protected $table = 'reserved_halls_list';
     // reserved_halls_list belongs to one hall
    public function halls(){
        return $this->belongsTo(Hall::class);
    }
}
