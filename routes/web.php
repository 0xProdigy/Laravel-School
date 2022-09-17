<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\HomeController;


Route::get('/index', [LoginController::class, "index"])->middleware("can:student.dashboard", "auth")->name("student.dashboard");

Route::get('/', [LoginController::class, "LoginView"])->name("login");

Route::get('/login', [LoginController::class, "LoginView"])->name("login");

Route::POST("/logueo", [LoginController::class, "logueo"])->name("logueo");

Route::POST("/logout", [LoginController::class, "logout"])->name("logout");



