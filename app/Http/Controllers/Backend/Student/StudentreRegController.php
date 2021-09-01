<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use DB;

class StudentreRegController extends Controller
{
    //
    public function userstore(Request $request){
        DB::transaction(function() use($request){
            //'email' => 'required|unique:users',
            //'name' => 'required',
        });

        $user = new User();
        $user -> name = $request -> name;
        $user ->lastname  = $request -> lastname;
        $user ->email  = $request -> email;
        $user ->date  = date('Y-m-d',strtotime($request -> date));  
        $user ->lieu_naissance  = $request -> lieu_naissance;
        $user ->ville_residence  = $request -> ville_residence;
        $user ->pays  = $request -> pays;
        $user ->origin_region  = $request -> origin_region;
        $user ->genre  = $request -> genre;
        $user ->departement  = $request -> departement;
        $user ->telephone  = $request -> telephone;
        $user ->statut  = $request -> statut;
        $user ->save();
        // $data ->date  = $request -> genre;
        // $data ->date  = $request -> genre;
        // $data ->date  = $request -> genre;
        // $data ->date  = $request -> genre;
        // $data ->date  = $request -> genre;
        // $data ->date  = $request -> genre;

     }
}
