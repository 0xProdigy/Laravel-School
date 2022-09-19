<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\UserController;

Route::get("", [HomeController::class, "dashboard"])->middleware("can:admin.dashboard")->name("admin.home");

Route::resource("users", UserController::class)->names("admin.users");

Route::resource("periods", PeriodController::class)->names("admin.periods");
