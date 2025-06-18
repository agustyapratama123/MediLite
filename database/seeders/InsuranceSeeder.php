<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insurance;
use Illuminate\Support\Carbon;

class InsuranceSeeder extends Seeder
{
    public function run(): void
    {
        $insurances = [
            [
                'provider' => 'BPJS Kesehatan',
                'policy_number' => 'BPJS-' . rand(1000000000, 9999999999),
                'coverage_start' => Carbon::now()->subYears(3)->startOfYear(),
                'coverage_end' => null,
            ],
            [
                'provider' => 'Prudential Indonesia',
                'policy_number' => 'PRU-' . rand(100000, 999999),
                'coverage_start' => Carbon::now()->subYears(2),
                'coverage_end' => Carbon::now()->addYears(1),
            ],
            [
                'provider' => 'AXA Mandiri',
                'policy_number' => 'AXA-' . rand(100000, 999999),
                'coverage_start' => Carbon::now()->subMonths(18),
                'coverage_end' => Carbon::now()->addMonths(6),
            ],
            [
                'provider' => 'Allianz Life Indonesia',
                'policy_number' => 'ALZ-' . rand(100000, 999999),
                'coverage_start' => Carbon::now()->subYears(1),
                'coverage_end' => Carbon::now()->addYears(2),
            ],
            [
                'provider' => 'Manulife Indonesia',
                'policy_number' => 'MLF-' . rand(100000, 999999),
                'coverage_start' => Carbon::now()->subYears(4),
                'coverage_end' => null,
            ],
        ];

        foreach ($insurances as $insurance) {
            Insurance::create($insurance);
        }
    }
}

