<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('health_center_doctors_phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('health_center_doctor_id');
            $table->string('phone_number', 20)->unique();
            $table->foreign('health_center_doctor_id')
                ->references('id')
                ->on('health_center_doctors')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_center_doctors_phones');
    }
};
