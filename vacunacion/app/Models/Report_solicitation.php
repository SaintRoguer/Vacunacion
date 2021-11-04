<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_solicitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'sanitary_region',
        'vaccinations_or_vaccines',
    ];
}
