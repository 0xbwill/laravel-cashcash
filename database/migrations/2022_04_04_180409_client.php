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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('numeroClient');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('adresse')->nullable();
            $table->string('siren')->nullable();
            $table->integer('numeroAgence')->nullable();
            $table->string('codeApe')->nullable();
            $table->string('raisonSociale')->nullable();
            $table->time('dureeDeplacement')->nullable();
            $table->integer('distanceKm')->nullable();
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
        //
    }
};
