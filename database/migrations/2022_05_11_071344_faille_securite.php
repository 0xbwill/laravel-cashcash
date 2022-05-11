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
        Schema::create('failleSecurite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomDeLaFaille'); // Nom de la faille
            $table->string('correctifFaille'); // Nom du correctif
            $table->date('dateDuCorrectif'); // Date de sortie du corre
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
