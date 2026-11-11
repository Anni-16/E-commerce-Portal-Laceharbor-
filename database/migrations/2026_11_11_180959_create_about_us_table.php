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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title');
            $table->text('banner_heading');
            $table->text('banner_subheading');
            $table->text('banner_alt_text');
            $table->text('banner_image')->nullable();
            $table->text('about_title');
            $table->text('about_heading');
            $table->text('about_alt_text');
            $table->text('about_image')->nullable();
            $table->text('about_subheading');
            $table->text('about_title_2');
            $table->text('about_heading_2');
            $table->text('about_description');
            $table->text('our_mission_title');
            $table->text('our_description');
            $table->text('what_we_do_title');
            $table->text('what_we_do_heading');
            $table->text('what_we_do_description');
            $table->text('our_pro_title');
            $table->text('our_pro_heading');
            $table->text('our_pro_description');
            $table->text('our_pro_tagline');
            $table->text('meta_title');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
