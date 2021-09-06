<?php

namespace App\Http\Controllers;


use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * retourner la page formations
     */

    public function index()
    {
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
        $events = Events::all();

        // retourner la vue
        return view('event.events', compact('events'));

    }

      public function index_detail()
    {
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
        $events = Events::all();

        // retourner la vue
        return view('event.detaill.detail', compact('events'));
    }
    
}

