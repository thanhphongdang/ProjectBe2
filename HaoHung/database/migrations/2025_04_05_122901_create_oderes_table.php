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
        Schema::create('oderes', function (Blueprint $table) {
            $table->id();
            $table->string('Name_Car');

            $table->foreignId('ID_Customer')
                ->constrained('customers', 'ID_Customer')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable(); // ✅ sửa lại đúng

            $table->foreignId('ID_Product')
                ->constrained('products', 'Id_Products') // ✅ dùng khóa chính chuẩn
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('ID_Sale')
                ->constrained('sales')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable(); // ✅ sửa lại đúng

            $table->string('Report'); // ✅ Sửa chính tả từ "Resport"
            $table->timestamp('Order_date')->useCurrent(); // ✅ sửa chính tả
            $table->double('Money_Sum');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oderes', function (Blueprint $table) {
            $table->dropForeign(['ID_Customer']);
            $table->dropForeign(['ID_Product']);
            $table->dropForeign(['ID_Sale']);
        });
        Schema::dropIfExists('oderes_');
    }
};
