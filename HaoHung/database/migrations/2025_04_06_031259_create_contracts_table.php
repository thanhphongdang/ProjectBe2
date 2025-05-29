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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('ID_Contract');
            // $table->foreignId('ID_Oder')
            // ->constrained('oders','ID_Oder')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            $table->decimal('Sum_Transaction',15);
            $table->string('Start_Transaction');
            $table->timestamp('Contract_Date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->dropForeign(['ID_Oder']);
            
        });
        Schema::dropIfExists('contracts');
    }
};
