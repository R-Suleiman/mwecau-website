<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterDoctor extends Model
{
    protected $table = "health_center_doctors";

    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'carde',
        'education_level',
        'profile_picture',

    ];

    public function department()
    {
        return $this->belongsTo(HealthCenterDepartment::class);
    }

    public function phones()
    {
        return $this->hasMany(HealthCenterDoctorPhone::class);
    }
}
