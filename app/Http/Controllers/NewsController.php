<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    /**
     * retourner la page formations
     */

    public function index(){
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
           $news = News::all();

       // retourner la vue
           return view('news.news', compact('news'));




    }
    public function index_detail(){
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
           $news = News::all();

       // retourner la vue
           return view('News.detail.detaill', compact('news'));
    }

}
