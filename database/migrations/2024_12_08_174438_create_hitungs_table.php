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
        Schema::create('hitungs', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_up');
            $table->string('b1');
            $table->string('b2');
            $table->string('b3');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hitungs');
    }
};
