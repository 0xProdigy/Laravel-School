<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view("users.index");
    }

    public function LoginView()
    {
        return view("auth.login");
    }

    public function logueo(Request $creds)
    {
        if (Auth::attempt($creds->only(['email', 'password']))) {
            request()->session()->regenerate();

            return $this->detectUser();
        } else {
            return redirect("login");
        }
    }

    public function detectUser()
    {

        $user = User::find(Auth::user()->id);

        if ($user->hasRole("admin")) {
            return redirect()->route("admin.home");
        } else {
            return $this->index();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("login");
    }
}
