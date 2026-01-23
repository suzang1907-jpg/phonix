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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('project_id');
            $table->string('title');
            $table->string('image_id')->nullable();
            $table->timestamp('location_connected_at')->nullable();
            $table->longText('content_raw')->nullable();
            $table->string('location_id')->nullable();
            $table->json('tags')->nullable();
            $table->index('project_id');
            $table->index('location_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
