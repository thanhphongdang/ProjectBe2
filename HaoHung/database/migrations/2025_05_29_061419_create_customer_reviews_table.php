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
        Schema::create('customer__reviews', function (Blueprint $table) {
            $table->id();
            $table->string('Avatar');
            $table->string('Customer_Name');
            $table->string('Evaluate');
            $table->string('Description');
            $table->string('image_Product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer__reviews');
    }
};

