<?php

use App\Http\Controllers\Teacher\HomeController;
use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\Teacher\HomeController;
 
Route::get("", [HomeController::class, "dashboard"])->middleware("can:teacher.dashboard")->name("teacher.home");
