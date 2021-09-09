<?php

namespace App\Http\Controllers;

use App\Models\News1;
use Illuminate\Http\Request;

class News1Controller extends Controller
{
    public function returnViewbyid($id){
        $news = News1::all();

        switch($id){

            case 1:
         return view('News.news1', compact('news'));
            break;

            case 2: 
        return view('News.news2', compact('news'));
             break;

             case 3:  
          return view('News.news3', compact('news'));
            break;

             case 4:        
        return view('News.news4', compact('news'));
                 break;

             case 5:
                            
                return view('News.news5', compact('news'));
                            break;

            case 6:
                            
                return view('News.news6', compact('news'));
                             break;


            case 7:
                            
                return  view('News.news7', compact('news'));
                             break;

               case 8:
                                       
                return  view('News.news8', compact('news'));
                                        break;

                 case 9:     
                return  view('News.news9', compact('news'));
                     break;
               
        }
    }


// fonction qui affiche les detailles de chaque a
    public function returnDetailById($id){
        $news = News1::all();

        switch($id){
            case 1:
            return view('News.detail.detaill1', compact('news'));
            break;

            case 2:
                return view('News.detail.detaill2', compact('news'));
                break;

             case 3:
             return view('News.detail.detaill3', compact('news'));
             break;

             case 4:
              return view('News.detail.detaill4', compact('news'));
               break;
                    
            case 5:
            return view('News.detail.detaill5', compact('news'));
            break;

            case 6:
                return view('News.detail.detaill6', compact('news'));
                break;

            case 7:
            return view('News.detail.detaill7', compact('news'));
            break;

            case 8:
                return view('News.detail.detaill8', compact('news'));
                break;

            case 9:
                return view('News.detail.detaill9', compact('news'));
                break;
               

        }

    }
    
  
}


