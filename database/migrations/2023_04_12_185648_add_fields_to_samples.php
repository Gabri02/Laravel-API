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
        Schema::table('samples', function (Blueprint $table) {
            $table->string("impianto")->after("id");
            $table->string("nome_campione")->after("impianto");
            $table->string("stato")->after("nome_campione");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('samples', function (Blueprint $table) {
            $table->dropColumn("impianto");
            $table->dropColumn("nome_campione");
            $table->dropColumn("stato");
        });
    }
};
