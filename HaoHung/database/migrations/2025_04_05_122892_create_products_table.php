<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('Id_Products');
            $table->unsignedBigInteger('ID_Car');
            $table->foreign('ID_Car')->references('id')->on('warehouses')->onDelete('cascade');
            $table->string('Name_Car');
            $table->string('Car_Company');
            $table->bigInteger('Price');
            $table->text('Information');
            $table->string('Image');
            $table->string('Countries');
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
