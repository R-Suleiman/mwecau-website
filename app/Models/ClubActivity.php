<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClubActivity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_name', 'club_id'];

    public function club ():BelongsTo {
        return $this->belongsTo(Club::class);
    }
}
