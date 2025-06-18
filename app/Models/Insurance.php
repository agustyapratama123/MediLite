<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'provider',
        'policy_number',
        'coverage_start',
        'coverage_end',
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'insurance_patient')
                    ->withTimestamps();
    }

}
