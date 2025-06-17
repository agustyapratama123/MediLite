<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use HasFactory;

    const ADMIN = 1;
    const PATIENT = 2;
    const DOCTOR = 3;
    // public function users() {
    //     return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
	// }
 
    // public function permissions() {
    //     return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
	// }
}

