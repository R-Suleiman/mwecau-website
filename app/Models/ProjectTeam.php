<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    protected $table = 'project_team_members';
    use HasFactory;

    protected $fillable = [
        'initials',
        'name',
        'bio',
        'institute',
        'position',
        'project_id',
        'profile_picture'
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_team_member_project', 'project_team_member_id', 'project_id');
    }

}
