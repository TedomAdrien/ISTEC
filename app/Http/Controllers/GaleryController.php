<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
    //
    
    public function index(){
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
        //    $galerys = Galery::all();

       // retourner la vue
           return view('galery.galery');


    }
}
