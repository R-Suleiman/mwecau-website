<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterNewsEvent extends Model
{
    protected $table = "health_center_news_events";
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'location',
        'organizer',
        'contact',
        'email',
        'image',
    ];
}
