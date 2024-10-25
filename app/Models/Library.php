<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'libray';
    use HasFactory;

    protected $fillable = [
        'category_name',
        'name',
        'description',
        'link'
    ];
}
