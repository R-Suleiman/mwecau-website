<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InnovationProject extends Model
{
    use HasFactory;

    protected $fillable = ['project_title', 'club_id', 'description', 'category', 'duration', 'primary_image'];

    public function club():BelongsTo {
        return $this->belongsTo(Club::class);
    }

    public function images():HasMany {
        return $this->hasMany(InnovationProjectGallery::class);
    }
}
