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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',64);
            $table->text('description')->nullable();
            $table->string('thumb',1024)->nullable();
            $table->unsignedDecimal('price', 6, 2);
            $table->string('series',32);
            $table->date('sale_date',64);
            $table->string('type',32);
            $table->string('artists',1024)->nullable();
            $table->string('writers',1024)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
