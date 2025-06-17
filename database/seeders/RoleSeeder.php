<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['id' => 1, 'name' => 'admin', 'description' => 'Administrator sistem'],
            ['id' => 2, 'name' => 'doctor', 'description' => 'Dokter'],
            ['id' => 3, 'name' => 'nurse', 'description' => 'Perawat'],
            ['id' => 4, 'name' => 'patient', 'description' => 'Pasien'],
            ['id' => 5, 'name' => 'lab', 'description' => 'Petugas laboratorium'],
            ['id' => 6, 'name' => 'pharmacist', 'description' => 'Petugas farmasi'],
            ['id' => 7, 'name' => 'receptionist', 'description' => 'Pendaftaran / front office'],
            ['id' => 8, 'name' => 'billing', 'description' => 'Petugas keuangan dan penagihan'],
            ['id' => 9, 'name' => 'radiology', 'description' => 'Petugas radiologi'],
            ['id' => 10, 'name' => 'it-support', 'description' => 'Teknisi atau staf IT'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['id' => $role['id']], $role);
        }
    }
}
