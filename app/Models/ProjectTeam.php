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
        'category',
        'project_id'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
