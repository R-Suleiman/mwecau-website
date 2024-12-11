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
        Schema::create('project_scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('category');
            $table->string('country');
            $table->string('application_url')->nullable();
            $table->text('eligibility_requirements')->nullable();
            $table->decimal('minimum_gpa', 3, 2)->nullable();
            $table->string('eligible_programs')->nullable();
            $table->integer('age_limit')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('required_documents')->nullable();
            $table->string('contact_email')->nullable();
            $table->enum('status', ['Open', 'Closed'])->default('Open');
            $table->string('duration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_scholarships');
    }
};
