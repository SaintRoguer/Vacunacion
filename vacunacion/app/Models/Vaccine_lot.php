<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine_lot extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'lot_number',
        'vaccine',
        'ammount_of_vaccines',
        'date_of_caducity',
        'sanitary_region',
    ];

}
