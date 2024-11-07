<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    protected $table = 'project_team';
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

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
