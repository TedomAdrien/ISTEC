<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corse;


class CorseController extends Controller
{
    //
     public function index(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            $corses = Corse::all();

        // retourner la vue
            return view('courses.courses', compact('corses'));


     }
}
