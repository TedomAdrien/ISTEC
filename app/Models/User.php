<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
            'lastname',
            'email',
            'NoCNI',
            'date',
            'lieu_naissance',
            'ville_residence',
            'pays',
            'statut',
            'origin_region',
            'genre',
            'telephone',
            'cycle',
            'formation',
            'specialités',
            'diplome',
            'date_optention',
            'pays_obtention',
            'Etablissement',
            'niveau',
            'situation_passé',
            'Date_arrive_fac',
            'typeuniv',
            'active_proffetionnel',
            'loisir1',
            'loisir2',
            'handip',
            'actsport',
            'name_parent',
            'ville_resid_parent',
            'telephone_parent',
            'name_autre',
            'ville_resid_autre',
            'telephone_autre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
