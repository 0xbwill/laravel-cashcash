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
        Schema::create('intervention', function (Blueprint $table) {
            $table->id('numeroIntervenant');
            $table->date('dateVisite');
            $table->time('heureVisite');
            $table->integer('numeroClient');
            $table->integer('id');
            $table->integer('telephoneMobile');
        });    }

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
