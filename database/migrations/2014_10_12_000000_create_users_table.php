<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->date('date');
            $table->string('lieu_naissance');
            $table->string('ville_residence');
            $table->string('pays');
            $table->string('statut');
            $table->string('origin_region');
            $table->string('departement');
            $table->string('genre');
            $table->integer('telephone');
            $table->string('cycle')->nullable();
            $table->string('formation')->nullable();
            $table->string('specialités')->nullable();
            $table->string('diplome')->nullable();
            $table->string('date_optention')->nullable();
            $table->string('pays_obtention')->nullable();
            $table->string('Etablissement')->nullable();
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
        Schema::dropIfExists('users');
    }
}
