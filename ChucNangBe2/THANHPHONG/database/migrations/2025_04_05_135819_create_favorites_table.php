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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignID('ID_Customer')
                ->constrained('customers', 'ID_Customer')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignID('ID_Product')
                ->constrained('products', 'Id_Products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->dropForeign(['ID_Customer']);
            $table->dropForeign(['ID_Product']);
        });
        Schema::dropIfExists('favorites');
    }
};
