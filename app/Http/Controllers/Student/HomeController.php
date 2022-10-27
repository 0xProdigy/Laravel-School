<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\StudentUser;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view("student.dashboard");
    }

    public function x()
    {
        $user = StudentUser::where("id_identifier", Auth::user()->id_identifier)->first();

        $section = Section::where("id", $user->trayecto)->first();
        return Subject::where("trayecto", $section->id)->get();
    }
}
