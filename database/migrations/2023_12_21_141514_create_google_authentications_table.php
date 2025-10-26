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
        Schema::create('google_authentications', function (Blueprint $table) {
            $table->id();
            $table->string('google_integration_id');
            $table->string('user_id')->unique();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('code_verifier')->nullable();
            $table->json('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_authentications');
    }
};
