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
        Schema::create('company_counts', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('saler_id');
            $table->integer('liked');
            $table->integer('visitor');
            $table->integer('interested');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_counts');
    }
};
