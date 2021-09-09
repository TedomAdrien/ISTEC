<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use Illuminate\Support\Facades\DB as DB;

class StudentreRegController extends Controller
{
    //
    public function userstore(Request $request)
    {
        
        DB::transaction(function () use ($request) {
            //'email' => 'required|unique:users',
            //'name' => 'required',
        });

        $user = new User();
        $user->name = $request->name;
        $user->lastname  = $request->lastname;
        $user->email  = $request->email;
        $user->NoCNI  = $request->NoCNI;
        $user->date  = date('Y-m-d', strtotime($request->date));
        $user->lieu_naissance  = $request->lieu_naissance;
        $user->ville_residence  = $request->ville_residence;
        $user->pays  = $request->pays;
        $user->statut  = $request->statut;
        $user->origin_region  = $request->origin_region;
        $user->genre  = $request->genre;
        $user->telephone  = $request->telephone;
        $user->cycle  = $request->cycle;
        $user->formation  = $request->formation;
        $user->specialités  = $request->specialités;
        $user->diplome  = $request->diplome;
        $user->date_optention  = $request->date_optention;
        $user->pays_obtention  = $request->pays_obtention;
        $user->Etablissement  = $request->Etablissement;
        $user->niveau  = $request->niveau;
        $user->situation_passé  = $request->situation_passé;
        $user->Date_arrive_fac  = $request->Date_arrive_fac;
        $user->typeuniv  = $request->typeuniv;
        $user->active_proffetionnel  = $request->active_proffetionnel;
        $user->loisir1  = $request->loisir1;
        $user->loisir2  = $request->loisir2;
        $user->handip  = $request->handip;
        $user->actsport  = $request->actsport;
        $user->name_parent  = $request->name_parent;
        $user->ville_resid_parent  = $request->ville_resid_parent;
        $user->telephone_parent  = $request->telephone_parent;
        $user->name_autre  = $request->name_autre;
        $user->ville_resid_autre  = $request->ville_resid_autre;
        $user->telephone_autre  = $request->telephone_autre;
        $user->save();
    }







    






}





 