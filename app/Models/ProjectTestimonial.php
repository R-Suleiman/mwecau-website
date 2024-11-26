<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTestimonial extends Model
{
    protected $table = "project_testimonials";
    use HasFactory;

    protected $fillable = [
        'testifier_initials',
        'testifier_name',
        'testimonial_description',
        'testifier_occupation',
        'testifier_profile_picture',
    ];
}
