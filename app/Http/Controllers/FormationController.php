<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * retourner la page formations
     */

     public function index(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $formations = Formation::all();

        // retourner la vue
            return view('formation.formation', compact('formations'));


     }
}
