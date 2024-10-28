<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'thumbnail',
    ];

    public function galleryImages()
    {
        return $this->hasMany(GalleryImage::class);
    }
}
