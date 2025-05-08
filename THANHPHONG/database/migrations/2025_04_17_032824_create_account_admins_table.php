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
        Schema::create('account_admins', function (Blueprint $table) {
            $table->id('id');
            $table->string('Name');
            $table->string('Email');
            $table->integer('Phone');
            $table->string('Password');
            $table->string('image');
            $table->string('logo');
            $table->string('image_front');
            $table->string('image_backsite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_admins');
    }
};
