<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title' ,
        'event_category' ,
        'event_description' ,
        'event_image' ,
        'speaker_fullname' ,
        'speaker_profession' ,
        'speaker_info' ,
        'speaker_photo' ,
        'event_cost' ,
        'event_date' ,
        'eventStart_time' ,
        'eventEnd_time' ,
        'event_location' ,
        'event_organizer' ,
        'total_slots' ,
        'booked_slots' ,
    ];
}
