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

    // project project team relation
    public function projectTeam()
    {
        return $this->belongsToMany(ProjectTeam::class, 'project_team_member_project', 'project_id', 'project_team_member_id');
    }

    // project gallery relation
    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class);
    }
    // project scholarship relation
    public function scholarships()
    {
        return $this->hasMany(ProjectScholarship::class, 'project_id');
    }
    // project project beneficiary relation
    public function scholarshipBeneficiaries()
    {
        return $this->hasManyT(ProjectScholarshipBeneficiary::class, 'project_id');
    }
}
