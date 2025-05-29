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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_Product')
            ->constrained("products", "Id_Products")
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('ID_Customer')
            ->constrained("users", "id")
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('Name_Car');
            $table->double('Sum');
            $table->integer('Quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['ID_Customer']);
            $table->dropForeign(['ID_Car']);
        });
        Schema::dropIfExists('carts');
    }
};
