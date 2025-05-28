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
        Schema::create('make_an_appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Date_Book')->useCurrent();
            $table->foreignId('ID_Product')
            ->constrained('products','Id_Products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('ID_Customer')
            ->constrained('users','id')
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
        Schema::table('make_an_appointments', function (Blueprint $table) {
            $table->dropForeign(['ID_Customer']);
            $table->dropForeign(['ID_Product']);
        });
        Schema::dropIfExists('make_an_appointments');
    }
};
