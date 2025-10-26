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
        Schema::create('blog_contents', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->longText('content');
            $table->longText('description');
            $table->timestamps();
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('location_connected_at');
            $table->dropColumn('content_raw');
            $table->string('short_description')->nullable();
            $table->string('blog_content_id')->nullable();
            $table->dropColumn('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('blog_content_id');
            $table->dropColumn('short_description');
            $table->longText('content_raw')->nullable();
            $table->json('tags')->nullable();
            $table->timestamp('location_connected_at')->nullable();
        });

        Schema::dropIfExists('blog_contents');
    }
};
