<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('insurance_patient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->foreignId('insurance_id')->constrained('insurances')->cascadeOnDelete();

            $table->timestamps();

            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('insurance_patient');
    }
};

