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
        Schema::create('domains', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->longText('name')->nullable();
            $table->string('site_id');
            $table->string('domain');
            $table->string('location_id')->nullable();
            $table->string('type');
            $table->timestamp('dns_record_confirmed_at')->nullable();
            $table->json('referal_domains')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
