<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('nome_azienda', 100);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->tinyInteger('codice_treno')->unique();
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
