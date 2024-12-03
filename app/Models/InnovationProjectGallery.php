<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovationProjectGallery extends Model
{
    use HasFactory;

    protected $fillable = ['innovation_project_id', 'image'];

    public function images() {
        return $this->belongsTo(InnovationProject::class);
    }
}
