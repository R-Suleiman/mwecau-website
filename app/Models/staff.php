<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
        'title',
        'staffID',
        'firstName',
        'lastName',
        'aboutStaff',
        'academicQualification',
        'department',
        'email',
        'phone',
        'gender',
        'nationality',
        'language',
        'staffProfile_picture',
    ];
}

