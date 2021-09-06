<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    //
     public function index_bts(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $cycles = Cycle::all();

        // retourner la vue
            return view('formation.cycle.cycle_bts', compact('cycles'));


     }
       public function index_licence(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $cycles = Cycle::all();

        // retourner la vue
            return view('formation.cycle.cycle_licence', compact('cycles'));


     }
       public function index_master(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $cycles = Cycle::all();

        // retourner la vue
            return view('formation.cycle.cycle_master', compact('cycles'));


     }
       public function index_expertise(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $cycles = Cycle::all();

        // retourner la vue
            return view('formation.cycle.cycle_expertise', compact('cycles'));


     }
}
