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
        Schema::create('trainingLogs', function (Blueprint $table) {
            $table->id();
            $table->string('userID',20);
            $table->string('exerciseID',255)->nullable();
            $table->string('date',255)->nullable();
            $table->string('achievedWeight',255);
            $table->string('achievedReps',255);
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metrainingLogsmbers');
    }
};
