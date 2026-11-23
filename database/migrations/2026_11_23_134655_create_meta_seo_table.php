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
        Schema::create('meta_seo', function (Blueprint $table) {
            $table->id();
            $table->text('home_meta_title');
            $table->text('home_meta_keyword');
            $table->text('home_meta_description');
            $table->text('pro_meta_title');
            $table->text('pro_meta_keyword');
            $table->text('pro_meta_description');
            $table->text('faq_meta_title');
            $table->text('faq_meta_keyword');
            $table->text('faq_meta_description');
            $table->text('size_meta_title');
            $table->text('size_meta_keyword');
            $table->text('size_meta_description');
            $table->text('pro_cat_meta_title');
            $table->text('pro_cat_meta_keyword');
            $table->text('pro_cat_meta_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_seo');
    }
};
