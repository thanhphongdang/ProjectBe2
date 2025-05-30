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
        Schema::create('make_appoints', function (Blueprint $table) {
            $table->id();
            $table->string('Name_car');
            $table->string('Name_User');
            $table->integer('Phone');
            $table->string('Address');
            $table->string('Email');
            $table->string('Dealer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_appoints');
    }
};
