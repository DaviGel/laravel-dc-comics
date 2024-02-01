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
        Schema::create('dc_comics', function (Blueprint $table) {
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('thumb')->nullable();
            $table->string('price', 10);
            $table->string('series', 50);
            $table->string('type', 30);
            $table->text('artists');
            $table->text('writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dc_comics');
    }
};
