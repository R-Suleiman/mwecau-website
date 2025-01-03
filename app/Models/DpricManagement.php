<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DpricManagement extends Model
{
    use HasFactory;

    protected $fillable = ['initial', 'first_name', 'other_name', 'last_name', 'position', 'photo', 'rank'];
}
