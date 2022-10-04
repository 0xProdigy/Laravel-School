<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\Assignment;
use App\Http\Controllers\Student\HomeController;



Route::get("", [HomeController::class, "dashboard"])->middleware("can:student.dashboard")->name("student.home");
Route::get("/x", [HomeController::class, "x"])->middleware("can:student.dashboard")->name("student.x");


Route::resource("assignments", Assignment::class)->names("student.assignments");

