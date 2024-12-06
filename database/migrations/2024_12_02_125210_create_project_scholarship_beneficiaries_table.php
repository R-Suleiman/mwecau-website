<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('project_scholarship_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarship_id')->nullable(); // Correctly making the column nullable
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('beneficiary_name');
            $table->string('beneficiary_research_title')->nullable();
            $table->string('beneficiary_photo')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
            $table->foreign('scholarship_id')->references('id')->on('project_scholarships')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_scholarship_beneficiaries');
    }
};
