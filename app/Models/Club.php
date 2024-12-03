<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'department',
        'welcome_message',
        'mission',
        'vision',
        'found_date',
        'total_members',
        'total_projects',
        'primary_image',
    ];

    public function projects ():HasMany {
        return $this->hasMany(InnovationProject::class);
    }

    public function images ():HasMany {
        return $this->hasMany(ClubGallery::class);
    }

    public function activities ():HasMany {
        return $this->hasMany(ClubActivity::class);
    }

    public function leaders ():HasMany {
        return $this->hasMany(ClubLeader::class);   
    }
}
