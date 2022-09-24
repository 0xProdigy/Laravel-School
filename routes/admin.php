<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
//Administration tools
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SalonController;
//Administration tools

//Users tools
use App\Http\Controllers\Admin\UserStudentController;
//Users tools

Route::get("", [HomeController::class, "dashboard"])->middleware("can:admin.dashboard")->name("admin.home");


//Administration tools
Route::resource("periods", PeriodController::class)->names("admin.periods");

Route::resource("subjects", SubjectController::class)->names("admin.subjects");

Route::resource("sections", SectionController::class)->names("admin.sections");

Route::resource("salon", SalonController::class)->names("admin.salon");
//Administration tools

//Users tools
Route::resource("students", UserStudentController::class)->names("admin.students");


//Users tools
 
