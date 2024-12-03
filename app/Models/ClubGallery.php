<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClubGallery extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'image'];

    public function club ():BelongsTo {
        return $this->belongsTo(Club::class);
    }
}
