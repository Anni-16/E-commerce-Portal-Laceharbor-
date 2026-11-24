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
        Schema::create('general_setting', function (Blueprint $table) {
            $table->id();
            $table->text('brand_name');
            $table->text('website_url');
            $table->text('Website_currecry');
            $table->text('copy_rights');
            $table->text('website_logo');
            $table->text('logo_alt_tag');
            $table->text('website_favicon');
            $table->text('favicon_alt_tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_setting');
    }
};
