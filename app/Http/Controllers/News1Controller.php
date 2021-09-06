<?php

namespace App\Http\Controllers;

use App\Models\News1;
use Illuminate\Http\Request;

class News1Controller extends Controller
{

    public function index_news1()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news1 = News1::all();

        // retourner la vue
        return view('News.news1', compact('news1'));
    }

    public function index_detail1()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news1 = News1::all();

        // retourner la vue
        return view('News.detail.detaill1', compact('news1'));
    }
    public function index_news2()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news2 = News1::all();

        // retourner la vue
        return view('News.news2', compact('news2'));
    }

    public function index_detail2()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news2 = News1::all();

        // retourner la vue
        return view('News.detail.detaill2', compact('news2'));
    }

    public function index_news3()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news3 = News1::all();

        // retourner la vue
        return view('News.news3', compact('news3'));
    }

    public function index_detail3()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news3 = News1::all();

        // retourner la vue
        return view('News.detail.detaill3', compact('news3'));
    }

    public function index_news4()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news4 = News1::all();

        // retourner la vue
        return view('News.news4', compact('news4'));
    }

    public function index_detail4()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news4 = News1::all();

        // retourner la vue
        return view('News.detail.detaill4', compact('news4'));
    }

    public function index_news5()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news5 = News1::all();

        // retourner la vue
        return view('News.news5', compact('news5'));
    }

    public function index_detail5()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news5 = News1::all();

        // retourner la vue
        return view('News.detail.detaill5', compact('news5'));
    }

    public function index_news6()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news6 = News1::all();

        // retourner la vue
        return view('News.news6', compact('news6'));
    }

    public function index_detail6()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news6 = News1::all();

        // retourner la vue
        return view('News.detail.detaill6', compact('news6'));
    }
    
    public function index_news7()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news7 = News1::all();

        // retourner la vue
        return view('News.news7', compact('news7'));
    }

    public function index_detail7()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news7 = News1::all();

        // retourner la vue
        return view('News.detail.detaill7', compact('news7'));
    }
    
    public function index_news8()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news8 = News1::all();

        // retourner la vue
        return view('News.news8', compact('news8'));
    }

    public function index_detail8()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news8 = News1::all();

        // retourner la vue
        return view('News.detail.detaill8', compact('news8'));
    }
    
    public function index_news9()
    {
        //variable pour recuperer la liste des evenementsde l'etablissement
        //le modele event recupere
        $news9 = News1::all();

        // retourner la vue
        return view('News.news9', compact('news9'));
    }

    public function index_detail9()
    {
        //variable pour recuperer la liste des evenements de l'etablissement
        //le modele formation recupere
        $news9 = News1::all();

        // retourner la vue
        return view('News.detail.detaill9', compact('news9'));
    }
    
}

