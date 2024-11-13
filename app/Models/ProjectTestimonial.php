<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTestimonial extends Model
{
    protected $table = "project_testmonials";
    use HasFactory;

    protected $fillable = [
        'atestant_initials',
        'atestant_name',
        'profile_picture',
        'institute',
        'occupation',
        'google_scholar',
        'twitter_x',
        'linkdein'
    ];
}
