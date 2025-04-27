<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('code');
            $table->integer('money');
            $table->longText('description');
            // $table->timestamp('Start_Date')->useCurrent();
            // $table->timestamp('End_Date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
