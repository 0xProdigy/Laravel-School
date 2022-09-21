<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SalonController;

Route::get("", [HomeController::class, "dashboard"])->middleware("can:admin.dashboard")->name("admin.home");

Route::resource("users", UserController::class)->names("admin.users");

Route::resource("periods", PeriodController::class)->names("admin.periods");

Route::resource("subjects", SubjectController::class)->names("admin.subjects");

/// Routes not Finished, they need a lot of work 

Route::resource("sections", SectionController::class)->names("admin.sections");

Route::resource("salon", SalonController::class)->names("admin.salon");
Route::resource("sections", SectionController::class)->names("admin.sections");
// Route::resource("subjects", SubjectController::class)->names("admin.subjects");
// Route::resource("subjects", SubjectController::class)->names("admin.subjects");
// Route::resource("subjects", SubjectController::class)->names("admin.subjects");
// Route::resource("subjects", SubjectController::class)->names("admin.subjects");
// Route::resource("subjects", SubjectController::class)->names("admin.subjects");

/// Routes not Finished, they need a lot of work
