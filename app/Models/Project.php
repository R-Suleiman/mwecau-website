<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category',
        'date',
        'location',
        'thumbnail'
    ];

    public function projectTeam()
    {
        return $this->hasMany(ProjectTeam::class);
    }
    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class);
    }
}
