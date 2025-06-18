<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class InsurancePatient extends Pivot
{
    protected $table = 'insurance_patient';

    protected $fillable = [
        'patient_id',
        'insurance_id',
    ];
}

