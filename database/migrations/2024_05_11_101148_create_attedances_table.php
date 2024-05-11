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
        Schema::create('attedances', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->references('id')->on('organizations');
            $table->uuid('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->uuid('org_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->date('date');
            $table->time('in_time');
            $table->time('out_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attedances');
    }
};
