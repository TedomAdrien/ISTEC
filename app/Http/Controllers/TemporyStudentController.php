<?php

namespace App\Http\Controllers;

use App\Models\TemporyParent;
use App\Models\TemporyStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class TemporyStudentController extends Controller
{
    public function store(Request $request)
    {
            //code...
             $validator = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:tempory_students',
            'NoCNI' => 'required|min:9',
            'birthdate' => 'required|date',
            'lieu_naissance' => 'required|min:3',
            'ville_residence' => 'required|min:3',
            'pays' => 'nullable|min:3',
            'origin_region' => 'nullable|min:3',
            'sex' => 'required',
            'phone_number' => 'nullable|required|min:9|unique:tempory_students',
            'statut' => 'nullable|max:11',
            'cycle' => 'required|max:7',
            'niveau' => 'required|max:1',
            'formation' => 'required|min:10',
            'specialites' => 'required|min:3',
            'diplome' => 'required|min:3',
            'date_obtention' => 'required|max:4',
            'pays_obtention' => 'required|min:3',
            'etablissement' => 'required|min:3',
            'situation_passe' => 'nullable',
            'date_arrive_fac' => 'nullable',
            'typeuniv' => 'nullable',
            'parrain' => 'required|min:3',
            'phone_number_parrain' => 'nullable|min:9',
            'professional_activity' => 'nullable',
            'loisir1' => 'nullable',
            'loisir2' => 'nullable',
            'handicap' => 'nullable',
            'sport_activity' => 'nullable',
            'name_parent' => 'required|min:3',
            'lastname_parent' => 'required|min:3',
            'ville_resid_parent' => 'required|min:3',
            'telephone_parent' => 'required|min:8',
            'name_autre' => 'nullable|min:3',
            'lastname_autre' => 'nullable|min:3',
            'ville_resid_autre' => 'nullable|min:3',
            'telephone_autre' => 'nullable|min:8',
        ],
        [
             'cycle.max' => 'veuillez selectionner un cycle',
            'niveau.max' => 'veuillez selectionner un niveau',
            'formation.min' => 'veuillez selectionner un cycle',
            'specialites.min' => 'veuillez entrer une spécialité correcte',
            'date_obtention.max' => 'veuillez selectionner une date correcte',
            'statut.max' => 'veuillez indiquer votre statut',

        ]);

        try {
        // create temporaly student
        $student = TemporyStudent::create($request->all());

        // create parents
        $parent = TemporyParent::create([
            'first_name' => $request->name_parent,
            'last_name' => $request->lastname_parent,
            'ville_residence' => $request->ville_resid_parent,
            'phone_number' => $request->telephone_parent,
            'tempory_student_id' => $student->id,
        ]);

        // if exist, create other parents
        $other_parent = null;
        if (!is_null($request->name_autre)) {
            $other_parent = TemporyParent::create([
                'first_name' => $request->name_autre,
                'last_name' => $request->lastname_autre,
                'ville_residence' => $request->ville_resid_autre,
                'phone_number' => $request->telephone_autre,
                'tempory_student_id' => $student->id,
            ]);
        }

            return view('frontend.inscription.recapitulatif', compact('student', 'parent', 'other_parent'))->with('success', 'Pré-inscription enregistrée !');
        } catch (\Exception $e) {
            return redirect()->back()->with('echec', 'Echec lors de l\'inscrition, veuillez re-éssayer...');
        }
    }

    public function print(TemporyStudent $student)
    {
        // retreive all records from db
        $parent = TemporyParent::where('tempory_student_id', $student->id)->first();
        $other_parent = null;

        $pdf = PDF::loadView('frontend.inscription.recapitulatif', compact('student', 'parent', 'other_parent'));

        //return $pdf;
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
