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
        'thumbnail',
        'pdf'
    ];


    public function projectTeam()
    {
        return $this->belongsToMany(ProjectTeam::class, 'project_team_member_project', 'project_id', 'project_team_member_id');
    }

    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class);
    }
}
