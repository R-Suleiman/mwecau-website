<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DpricImage extends Model
{
    use HasFactory;

    protected $fillable = ['page_name', 'page_section', 'image_path'];
}
