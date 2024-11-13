<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectConferences extends Model
{
    protected $table = "project_conferences";
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'host',
        'location',
        'date',
        'pdf',
    ];
}
