<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPublication extends Model
{
    protected $table = "project_publications";

    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'about_publication',
        'year',
        'document1',
        'document2',
    ];
}
