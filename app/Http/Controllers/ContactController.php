<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    //
    public function index(){
       // retourner la vue
           return view('contact.contact');
        }

         public function store(Request $request)
         {
            //code...
             $validator = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone_number' => 'required|min:9|integer',
            'message' => 'required|min:10',
        ],
        [
            'email.email'=> 'Entrer une adresse email correcte',
            'phone_number.integer'=> 'Entrer un numéro de téléphone correcte'
        ]);
        try {
        // create contact
        $contact = Contact::create($request->all());
            return redirect()->back()->with('success', 'Votre message a bien été envoyé ^_^');
        } catch (\Exception $e) {
            return redirect()->back()->with('echec', 'Echec lors de l\'envoie du message, veuillez re-éssayer :-(');
        }
    }
}

