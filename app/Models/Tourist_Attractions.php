<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist_Attractions extends Model
{
    use HasFactory;

    protected $fillable = [
        'City',
        'Attraction',
        'Image',

    ];
}
