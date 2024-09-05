<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'sub_header',
        'descirption',
        'page',
        'image_section',
        'image'
    ];
}
