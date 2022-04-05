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
        Schema::create('materiel', function (Blueprint $table) {
            $table->id('numeroDeSerie');
            $table->date('dateDeVente');
            $table->date('dateInstallation');
            $table->float('prixVente');
            $table->string('emplacement');
            $table->integer('refInterne');
            $table->integer('numeroClient');
            $table->integer('numeroContrat');
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
