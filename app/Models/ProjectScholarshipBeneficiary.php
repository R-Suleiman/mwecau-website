<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectScholarshipBeneficiary extends Model
{
    protected $table = 'project_scholarship_beneficiaries';

    use HasFactory;

    protected $fillable = [
        'project_id',
        'scholarship_id',
        'beneficiary_name',
        'beneficiary_research_title',
        'university',
        'scholarship_duration',
        'beneficiary_photo'
    ];

    //scholarship and scholarship beneficiaries relation
    public function scholarship()
    {
        return $this->belongsTo(ProjectScholarship::class, 'scholarship_id');
    }
    //scholarship beneficiary and project relationship
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

