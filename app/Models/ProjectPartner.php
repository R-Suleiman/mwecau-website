<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPartner extends Model
{
    protected $table = "project_partners";
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'partner_logo',
    ];
}
