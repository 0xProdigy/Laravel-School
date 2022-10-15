<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class HomeController extends Controller
{
    //
    public function dashboard(){
        return view("admin.dashboard");
    } 
    
    public function x(){
        $subjects = Subject::where("id_identifier_teacher", 51)->paginate(1);
        return view("admin.x", compact("subjects"));
    }
}
