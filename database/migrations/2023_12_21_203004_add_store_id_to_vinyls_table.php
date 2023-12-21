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
        Schema::table('vinyls', function (Blueprint $table) {
            $table->unsignedBigInteger('store_id')->index()->nullable();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });

        /*
        Il metodo index() in una migrazione di Laravel viene utilizzato per aggiungere un indice al campo della colonna del database specificato.
        Gli indici migliorano le prestazioni delle query su colonne specifiche, facilitando al database la ricerca e l'accesso ai dati.
        L'aggiunta di un indice è particolarmente utile quando si eseguono frequenti operazioni di ricerca o ordinamento sulla colonna indicizzata.
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vinyls', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
            $table->dropColumn('store_id');
        });
    }
};
