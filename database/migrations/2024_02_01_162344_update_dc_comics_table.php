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
            $table->date('sale_date')->after('series');
            $table->json('artists')->change();
            $table->json('writers')->change();
            $table->text('thumb')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics_models', function (Blueprint $table) {
            $table->dropColumn('sale_date');
            $table->string('artists')->change();
            $table->string('writers')->change();
            $table->string('thumb')->nullable()->change();
        });
    }
};
