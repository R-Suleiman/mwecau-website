<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectContent extends Model
{
    protected $table = "project_contents";
    use HasFactory;

    protected $fillable = [
        'section_header',
        'section_sub_header',
        'section_description',
        'page_section',
        'image'
    ];
}
