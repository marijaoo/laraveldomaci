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
        Schema::create('pozajmicas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('clan_id');
            $table->foreignId('knjiga_id');
            $table->string('BrojDanaPozajmice');
            $table->date('DatumVracanja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pozajmicas');
    }
};