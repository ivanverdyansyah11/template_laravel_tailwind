<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('dashboard.auth.login', [
            'title' => 'Login Page',
        ]);
    }

    public function register() {
        return view('dashboard.auth.register', [
            'title' => 'Register Page',
        ]);
    }
}
