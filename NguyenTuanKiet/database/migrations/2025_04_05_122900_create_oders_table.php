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
        Schema::create('oders', function (Blueprint $table) {
            $table->id('ID_Oder');
            $table->string('Name_Car');

            $table->foreignId('ID_Customer')
                ->constrained("customers", "ID_Customer")
                ->onUpdate('cascade')
                ->onDelete('cascade');

                $table->foreignID('ID_Product')
                ->references('Id_Products')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
          

            $table->foreignID('ID_Sale')
                ->constrained('sales', 'ID_Sale')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('Resport');
            $table->timestamp('Oder_date')->useCurrent();
            $table->double('Money_Sum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oders', function (Blueprint $table) {
            $table->dropForeign(['ID_Customer']);
            $table->dropForeign(['ID_Product']);
            $table->dropForeign(['ID_Sale']);
        });
        Schema::dropIfExists('oders');
    }
};
