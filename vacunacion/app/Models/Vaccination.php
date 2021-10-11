<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dni',
        'date_of_application',
        'vaccine',
        'number_of_doses',
        'risk_group',
        'adverse_effects',
    ];
}
