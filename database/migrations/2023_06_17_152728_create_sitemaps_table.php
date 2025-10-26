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
        Schema::create('sitemaps', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('domain_id')->unique();
            $table->string('google_site_id')->nullable();
            $table->string('google_permission_level')->nullable();
            $table->timestamp('google_sitemap_submitted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitemaps');
    }
};
