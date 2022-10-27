<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view("teacher.dashboard");
    }
    public function x()
    {
    }
}
