<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_Single;

class CourseSingleController extends Controller
{
    public function index()
    {
        //le modele course_single recupere
        $course_singles = Course_Single::all();

        // retourner la vue
        return view('course_single.course_single', compact('course_singles'));
    }
}
