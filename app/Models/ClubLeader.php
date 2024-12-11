<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClubLeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'title',
        'email',
        'phone_number',
        'image',
        'club_id',
    ];

    public function club():BelongsTo {
        return $this->belongsTo(Club::class);
    }
}
