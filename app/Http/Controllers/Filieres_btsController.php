<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Filieres_btsController extends Controller
{
    //
    public function index()
    {
        //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
         $filieres_bts = Filiere_bts::all();

         // retourner la vue
             return view('formation.filieres_bts.filieres_bts', compact('filieres_bts'));
    }
}
