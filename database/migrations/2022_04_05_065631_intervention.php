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
            $table->id();
            $table->integer('numeroIntervenant');
            $table->date('dateVisite');
            $table->time('heureVisite');
            $table->integer('numeroClient');
            $table->boolean('isValid')->nullable();
            $table->string('tel')->nullable();
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
