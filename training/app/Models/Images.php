<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = "images";
    protected $fillable = [
      'image',
      'image_gallery_id',
    ];

    public function imagesGallery(){
        return $this->belongsTo(ImagesGallery::class);
    }
}
