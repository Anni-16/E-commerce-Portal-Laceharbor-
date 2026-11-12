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
        Schema::create('shipping_exchanges', function (Blueprint $table) {
            $table->id();
            $table->text('shipping_title');
            $table->text('shipping_date');
            $table->text('shipping_description');
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
        Schema::dropIfExists('shipping_exchanges');
    }
};
