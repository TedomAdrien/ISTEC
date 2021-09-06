<?php

namespace App\Http\Controllers;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
        $teachers = Teachers::all();

        // retourner la vue
        return view('teachers.teachers', compact('teachers'));

    }
}
