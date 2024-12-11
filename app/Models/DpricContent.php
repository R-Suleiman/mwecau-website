<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DpricContent extends Model
{
    use HasFactory;

    protected $fillable = ['page', 'section', 'title', 'description'];
}
