<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    //
    public function index(){
        //variable pour recuperer la liste des formations de l'etablissement
        //le modele formation recupere
           //$contacts = Contact::all();

       // retourner la vue
            return view('contact.contact');
 }
}