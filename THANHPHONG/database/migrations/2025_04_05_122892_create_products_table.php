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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('ID_Car')
            //     ->constrained("warehouses", "ID_Car")
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            $table->string('image_Product');
            $table->string('name_Car');
            $table->string('car_Company');
            $table->decimal('price');
            $table->text('information');
            $table->string('countries');
            // $table->integer('Start');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['ID_Car']);
        });
        Schema::dropIfExists('products');
    }
};