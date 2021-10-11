<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'laboratory',
        'date_of_caducity',
        'number_of_doses',
        'days_between_doses',
    ];
}
