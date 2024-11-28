<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterService extends Model
{
    protected $table = "health_center_services";
    use HasFactory;
    protected $fillable = [
        'department_id',
        'name',
        'description',
        'thumbnail',
    ];

    public function department()
    {
        return $this->belongsTo(HealthCenterDepartment::class);
    }

}
