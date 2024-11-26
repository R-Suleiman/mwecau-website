<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectScholarship extends Model
{
    protected $table = "project_scholarships";
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'offerd_by',
        'country',
        'application_url',
        'start_date',
        'end_date',
        'contact_email',
        'status',
        'duration',
        'attachment'

    ];
}
