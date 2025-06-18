<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     use HasFactory;

     protected $fillable = [
        'user_id',
        'nik',
        'no_bpjs',
        'name',
        'birth_date',
        'gender',
        'address',
        'phone',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function insurances()
    {
        return $this->belongsToMany(Insurance::class, 'insurance_patient')
                    ->withTimestamps();
    }
    
    // public function medicalHistories() {
    //     return $this->hasMany(MedicalHistory::class, 'patient_id');
	// }
 
    // public function appointments() {
    //     return $this->hasMany(Appointment::class, 'patient_id');
	// }
 
    // public function visits() {
    //     return $this->hasMany(Visit::class, 'patient_id');
	// }
 
    // public function insurances() {
    //     return $this->hasMany(Insurance::class, 'patient_id');
	// }
}
