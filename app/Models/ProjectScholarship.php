<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectScholarship extends Model
{
    protected $table = "project_scholarships";
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'offerd_by',
        'country',
        'application_url',
        'start_date',
        'end_date',
        'contact_email',
        'status',
        'duration',
        'attachment'

    ];

    // scholarship project relation
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    //scholarship and scholarship beneficiary relationship
    public function beneficiaries()
    {
        return $this->hasMany(ProjectScholarshipBeneficiary::class, 'scholarship_id');
    }
}
