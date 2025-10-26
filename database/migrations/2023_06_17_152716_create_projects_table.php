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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('support_phone_number')->nullable();
            $table->string('support_banner_id')->nullable();

            $table->string('name')->nullable();
            $table->string('google_tag')->nullable();
            $table->longText('location_description')->nullable();
            $table->string('amp_name')->nullable();

            $table->string('location_id')->nullable();
            $table->string('cloudflare_api_email')->nullable();
            $table->string('cloudflare_api_key')->nullable();

            $table->string('amp_logo_id')->nullable();
            $table->string('logo_id')->nullable();
            $table->string('article_watermark_id')->nullable();
            $table->string('article_banner_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
