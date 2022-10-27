<?php

use App\Http\Controllers\Teacher\ExamController;
use App\Http\Controllers\Teacher\HomeController;
use App\Http\Controllers\Teacher\SubjectListController;
use Illuminate\Support\Facades\Route;
 
Route::get("", [HomeController::class, "dashboard"])->middleware("can:teacher.dashboard")->name("teacher.home");
Route::get("/x", [HomeController::class, "x"])->middleware("can:teacher.dashboard")->name("teacher.x");

Route::resource("subjects", SubjectListController::class)->middleware("can:teacher.dashboard")->names("teacher.subjects");
Route::resource("exams", ExamController::class)->except("index")->middleware("can:teacher.dashboard")->names("teacher.exams");
