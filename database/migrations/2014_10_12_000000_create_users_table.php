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
            $table->string('NoCNI');
            $table->date('date');
            $table->string('lieu_naissance');
            $table->string('ville_residence');
            $table->string('pays');
            $table->string('statut');
            $table->string('origin_region');
            $table->string('genre');
            $table->integer('telephone');
            $table->string('cycle');
            $table->string('formation');
            $table->string('specialités');
            $table->string('diplome');
            $table->string('date_optention');
            $table->string('pays_obtention');
            $table->string('Etablissement');
            $table->string('niveau');
            $table->string('situation_passé');
            $table->string('Date_arrive_fac');
            $table->string('typeuniv');
            $table->string('active_proffetionnel');
            $table->string('loisir1');
            $table->string('loisir2');
            $table->string('handip');
            $table->string('actsport');
            $table->string('name_parent');
            $table->string('ville_resid_parent');
            $table->string('telephone_parent');
            $table->string('name_autre');
            $table->string('ville_resid_autre');
            $table->string('telephone_autre');
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
