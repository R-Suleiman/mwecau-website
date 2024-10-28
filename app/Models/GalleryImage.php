<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery_images';
    use HasFactory;

    protected $fillable = [
        'image',
        'gallery_id'
    ];

    public function image()
    {
        return $this->belongsTo(Gallery::class);
    }
}
