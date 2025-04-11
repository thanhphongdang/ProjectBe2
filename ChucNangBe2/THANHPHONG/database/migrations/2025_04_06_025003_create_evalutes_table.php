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
        Schema::create('evalutes', function (Blueprint $table) {
            $table->id('ID_Evalute');
            $table->foreignId('ID_Product')
            ->constrained('products','Id_Products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('ID_Customer')
            ->constrained('customers','ID_Customer')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamp('Evalute_Date')->useCurrent();
            $table->integer('Star');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evalutes', function (Blueprint $table) {
            $table->dropForeign(index: ['ID_Product']);
            $table->dropForeign(['ID_Customer']);
            
        });
        Schema::dropIfExists('evalutes');
    }
};
