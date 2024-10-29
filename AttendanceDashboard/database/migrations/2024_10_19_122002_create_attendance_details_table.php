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
        // Create the attendance_months table
        

        // Create the attendances table
        Schema::create('attendance_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->foreignId('attendance_id')
                  ->constrained('attendances')
                  ->onDelete('cascade'); 
            $table->foreignId('attendance_status_id')
                  ->constrained('attendance_statuses')
                  ->onDelete('restrict'); 
            $table->boolean('is_extra_day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the attendances table first due to foreign key constraints
        Schema::dropIfExists('attendance_details');
    }
};
