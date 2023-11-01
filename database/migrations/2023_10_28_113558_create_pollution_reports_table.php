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
        Schema::create('pollution_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('category', ['household', 'factory', 'other'])->nullable();
            $table->enum('type', ['smoke', 'smell', 'other'])->nullable();
            $table->string('image')->nullable();
            $table->string('description', 250)->nullable();
            $table->enum('case_status', ['on field', 'case closed'])->nullable();
            $table->date('date')->nullable();
            $table->decimal('lat', 10, 6)->nullable();
            $table->decimal('lng', 10, 6)->nullable();
            $table->string('address', 250)->nullable();
            $table->enum('pollutionLevel', ['low', 'medium', 'high', 'very high', 'extreme'])->nullable();
            $table->string('municipality')->nullable();
            $table->date('day_appended')->nullable();
            $table->date('day_closed')->nullable();
            $table->enum('status', ['in progress', 'completed', 'cancelled','awaiting', 'approval'])->default('in progress')->nullable();
            $table->string('inspector_description', 250)->nullable();
            $table->enum('perpetrator', ['located', 'unknown', 'fine', 'warning'])->nullable();
            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pollution_reports');
    }
};
