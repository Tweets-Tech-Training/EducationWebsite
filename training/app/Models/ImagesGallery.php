<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images ;
use Illuminate\Support\Facades\App;

class ImagesGallery extends Model
{
    use HasFactory;
    protected $table = "images_gallery";

    public function images(){
        return $this->hasMany(Images::class,'image_gallery_id');
    }
}
