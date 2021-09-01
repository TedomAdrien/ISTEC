<?php

namespace App\Http\Controllers;

use App\Models\Event1;
use Illuminate\Http\Request;

class Event1Controller extends Controller
{


    public function index()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event1 = Event1::all();

        // retourner la vue
        return view('event.event1', compact('event1'));

    }

      public function index_detail1()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event1 = Event1::all();

        // retourner la vue
        return view('event.detaill.detail1', compact('event1'));
    }
    public function index_event2()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $event2 = Event1::all();

        // retourner la vue
        return view('event.event2', compact('event2'));
    }

    public function index_detail2()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event2 = Event1::all();

        // retourner la vue
        return view('event.detaill.detail2', compact('event2'));
    }

    public function index_event3()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $event3 = Event1::all();

        // retourner la vue
        return view('event.event3', compact('event3'));
    }

    public function index_detail3()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event3 = Event1::all();

        // retourner la vue
        return view('event.detaill.detail3', compact('event3'));
    }

    public function index_event4()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $event4 = Event1::all();

        // retourner la vue
        return view('event.event4', compact('event4'));
    }

    public function index_detail4()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event4= Event1::all();

        // retourner la vue
        return view('event.detaill.detail4', compact('event4'));
    }

    public function index_event5()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $event5 = Event1::all();

        // retourner la vue
        return view('event.event5', compact('event5'));
    }

    public function index_detail5()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event5 = Event1::all();

        // retourner la vue
        return view('event.detaill.detail5', compact('event5'));
    }

    public function index_event6()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $event6 = Event1::all();

        // retourner la vue
        return view('event.event6', compact('event6'));
    }

    public function index_detail6()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $event6 = Event1::all();

        // retourner la vue
        return view('event.detaill.detail6', compact('event6'));
    }
}
