<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterDoctorPhone extends Model
{
    protected $table = "health_center_doctors_phones";

    use HasFactory;

    protected $fillable = [
        'health_center_doctor_id',
        'phone_number'
    ];

    public function doctor()
    {
        return $this->belongsTo(HealthCenterDoctor::class);
    }
}
