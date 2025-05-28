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
        Schema::create('old_cars', function (Blueprint $table) {
            $table->id('ID_old_car');
            $table->string('Name_Car_Old');
            $table->string('Car_Company');
            $table->decimal('Price');
            $table->text('Information');
            $table->string('Image');
            $table->string('Countries');
            $table->integer('Quantity');
            $table->foreignId('ID_Sale')
            ->constrained('sales','id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('old_cars', function (Blueprint $table) {
            $table->dropForeign(['ID_Sale']);
        });
        Schema::dropIfExists('old_cars');
    }
};
