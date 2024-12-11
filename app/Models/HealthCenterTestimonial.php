<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterTestimonial extends Model
{
    protected $table = "health_center_testimonials";
    use HasFactory;

    protected $fillable = [
        'testifier_name',
        'testimonial_description',
    ];
}
