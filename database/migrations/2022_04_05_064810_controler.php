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
        Schema::create('controler', function (Blueprint $table) {
            $table->id('numeroIntervenant');
            $table->integer('numeroDeSerie');
            $table->time('tempsPasse');
            $table->integer('numeroClient');
            $table->string('commentaire');
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
