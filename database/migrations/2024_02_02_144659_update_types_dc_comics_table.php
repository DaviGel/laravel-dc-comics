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
        Schema::table('comics_models', function (Blueprint $table) {
            $table->text('artists')->change();
            $table->text('writers')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics_models', function (Blueprint $table) {
            $table->json('artists')->change();
            $table->json('writers')->change();
        });
    }
};
