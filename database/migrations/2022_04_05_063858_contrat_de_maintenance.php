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
        Schema::create('contrat_de_maintenance', function (Blueprint $table) {
            $table->id('numeroDeContrat');
            $table->date('dateDeSignature');
            $table->date('dateEcheance');
            $table->integer('numeroClient');
            $table->integer('refTypeContrat');
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
