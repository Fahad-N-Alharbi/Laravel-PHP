<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Phone',
        'Email',
        'Person',
        'Days',
        'Total_Price',
        'Offerid'


    ];
}
