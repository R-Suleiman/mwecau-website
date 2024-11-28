<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenterDepartment extends Model
{
    protected $table = "health_center_departments";
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];

    public function services()
    {
        return $this->hasMany(HealthCenterService::class);
    }
    public function doctors()
    {
        return $this->hasMany(HealthCenterDoctor::class);
    }
}
