<?php

namespace App\Http\Controllers;

use App\Models\TeacherP;
use Illuminate\Http\Request;

class TeacherPController extends Controller
{
    public function index(){

         $teacherP = TeacherP::all();

        return view('teachers.teacherP',compact('teacherP'));
    }

    public function index_1()
    {

        $teacher1 = TeacherP::all();

        return view('teachers.teacher1', compact('teacher1'));
    }

    public function index_2()
    {

        $teacher2 = TeacherP::all();

        return view('teachers.teacher2', compact('teacher2'));
    }
    public function index_3()
    {

        $teacher3 = TeacherP::all();

        return view('teachers.teacher3', compact('teacher3'));
    }
    public function index_4()
    {

        $teacher4= TeacherP::all();

        return view('teachers.teacher4', compact('teacher4'));
    }
    public function index_5()
    {

        $teacher5= TeacherP::all();

        return view('teachers.teacher5', compact('teacher5'));
    }
    public function index_6()
    {

        $teacher6= TeacherP::all();

        return view('teachers.teacher6', compact('teacher6'));
    }
    public function index_7()
    {

        $teacher7= TeacherP::all();

        return view('teachers.teacher7', compact('teacher7'));
    }
    public function index_8()
    {

        $teacher8= TeacherP::all();

        return view('teachers.teacher8', compact('teacher8'));
    }
    public function index_9()
    {

        $teacher9= TeacherP::all();

        return view('teachers.teacher9', compact('teacher9'));
    }
    public function index_10()
    {

        $teacher10= TeacherP::all();

        return view('teachers.teacher10', compact('teacher10'));
    }
    public function index_11()
    {

        $teacher11= TeacherP::all();

        return view('teachers.teacher11', compact('teacher11'));
    }
    public function index_12()
    {

        $teacher12= TeacherP::all();

        return view('teachers.teacher12', compact('teacher12'));
    }
}


