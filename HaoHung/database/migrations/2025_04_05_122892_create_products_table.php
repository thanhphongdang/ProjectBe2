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
            $table->id('Id_Products');
            $table->foreignId('ID_Car')
                ->constrained("warehouses", "ID_Car")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('Name_Car');
            $table->string('Car_Company');
            $table->decimal('Price');
            $table->text('Information');
            $table->string('Image');
            $table->string('Countries');
            $table->integer('Start');
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
