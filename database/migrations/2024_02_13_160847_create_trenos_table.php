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
        Schema::create('trenos', function (Blueprint $table) {
            $table->id();

            $table -> string('azienda',60);
            $table -> string('stazione_di_partenza',60);
            $table -> string('stazione_di_arrivo',60);
            $table -> string('orario_partenza',10);
            $table -> string('orario_arrivo',10);
            $table -> string('codice_treno',15);
            $table -> decimal('numero_carrozze');
            $table -> string('data');
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('in_ritardo') -> default(false);



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
        Schema::dropIfExists('trenos');
    }
};
