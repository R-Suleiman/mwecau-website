<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->string('event_category');
            $table->string('event_description');
            $table->string('event_image')->nullable();
            $table->string('speaker_fullname');
            $table->string('speaker_profession');
            $table->string('speaker_info');
            $table->string('speaker_photo')->nullable();
            $table->string('event_cost');
            $table->date('event_date');
            $table->time('eventStart_time');
            $table->time('eventEnd_time');
            $table->string('event_location');
            $table->string('event_organizer');
            $table->string('total_slots');
            $table->string('booked_slots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
