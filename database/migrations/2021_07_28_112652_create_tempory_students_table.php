<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporyStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempory_students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('NoCNI');
            $table->date('birthdate');
            $table->string('lieu_naissance')->nullable();
            $table->string('ville_residence');
            $table->string('pays')->nullable();
            $table->string('origin_region')->nullable();
            $table->string('sex');
            $table->string('phone_number')->unique();
            $table->string('statut')->nullable();
            $table->string('cycle')->nullable();
            $table->string('niveau')->nullable();
            $table->string('formation')->nullable();
            $table->string('specialites')->nullable();
            $table->string('diplome')->nullable();
            $table->string('date_obtention')->nullable();
            $table->string('pays_obtention')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('situation_passe')->nullable();
            $table->string('date_arrive_fac')->nullable();
            $table->string('typeuniv')->nullable();
            $table->string('parrain');
            $table->string('phone_number_parrain')->nullable();
            $table->string('professional_activity')->nullable();
            $table->string('loisir1')->nullable();
            $table->string('loisir2')->nullable();
            $table->string('handicap')->nullable();
            $table->string('sport_activity')->nullable();
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
        Schema::dropIfExists('students');
    }
}
