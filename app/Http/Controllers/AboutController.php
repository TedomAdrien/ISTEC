<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
      public function index(){
         //variable pour recuperer la liste des formations de l'etablissement
         //le modele formation recupere
            // $abouts = About::all();

        // retourner la vue
            // return view('about.about', compact('about'));
                return view('about.about');


     }

    public function index_detail()
    {
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
        $abouts = About::all();

        // retourner la vue
        return view('about.detail.detail', compact('abouts'));
    }
}
