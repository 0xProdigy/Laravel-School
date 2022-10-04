<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
 

use App\Models\Subject;
use App\Models\Section;
use App\Models\StudentUser;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        return view("student.dashboard");
    }

    public function x(){ 
        $user = StudentUser::where("id_identifier", Auth::user()->id_identifier)->first();
        
        $section = Section::where("name", $user->section)->first();
        if ($section == null) {
            $assignments = null;
        }else {
            $assignments = Subject::where("trayecto", $section->name)->paginate(5);
        } 

        if ($assignments != null) {
            return $assignments;
        }else {
            return "NULL";
        }
    }
}
