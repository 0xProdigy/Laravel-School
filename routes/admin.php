<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
//Administration tools
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SalonController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\UserTeacherController;
//Administration tools

//Users tools
use App\Http\Controllers\Admin\UserStudentController;
//Users tools

Route::get("", [HomeController::class, "dashboard"])->middleware("can:admin.dashboard")->name("admin.home");
Route::get("x", [HomeController::class, "x"])->middleware("can:admin.dashboard")->name("x");


//Administration tools
Route::resource("periods", PeriodController::class)->names("admin.periods");

Route::resource("subjects", SubjectController::class)->names("admin.subjects");

Route::resource("sections", SectionController::class)->names("admin.sections");

Route::resource("salon", SalonController::class)->names("admin.salon");
//Administration tools

//Users tools
Route::resource("administrators", UserAdminController::class)->names("admin.administrators");
Route::resource("students", UserStudentController::class)->names("admin.students");
Route::resource("teachers", UserTeacherController::class)->names("admin.teachers");

Route::resource("schools", SchoolController::class)->names("admin.schools");

 

// Method STORE/DESTROY/UPDATE 
Route::get("/school/data", [SchoolController::class, "data"])->name("admin.schools.data"); 

//Users tools
 
