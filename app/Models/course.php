<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_title',
        'course_description',
        'course_entry_qualification',
        'course_code',
        'course_duration',
        'course_category',
        'course_thumbnail'
    ];
}
