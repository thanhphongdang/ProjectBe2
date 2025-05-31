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
        Schema::create('detail_cars', function (Blueprint $table) {
            $table->id('ID_detail_car');
            $table->foreignId('ID_Car')
            ->constrained('warehouses','id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Engine_Type');
            $table->string('Speed');
            $table->string('Car_consumption');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_cars', function (Blueprint $table) {
            $table->dropForeign(['ID_Car']);
        }); 
        Schema::dropIfExists('detail_cars');
    }
};
