<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurances extends Model
{
    protected $fillable = [
        'patient_id',
        'provider',
        'policy_number',
        'coverage_start',
        'coverage_end',
    ];

}
