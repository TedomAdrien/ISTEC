<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporyStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        
       'first_name' ,
            'last_name' ,
            'email',
            'NoCNI',
            'birthdate',
            'lieu_naissance' ,
            'ville_residence' ,
            'pays' ,
            'origin_region' ,
            'sex' ,
            'phone_number' ,
            'statut' ,
            'cycle' ,
            'niveau' ,
            'formation',
            'specialites' ,
            'diplome' ,
            'date_obtention',
            'pays_obtention' ,
            'etablissement' ,
            'situation_passe' ,
            'date_arrive_fac' ,
            'typeuniv' ,
            'parrain' ,
            'phone_number_parrain' ,
            'professional_activity' ,
            'loisir1' ,
            'loisir2' ,
            'handicap' ,
            'sport_activity' ,
];
}
