<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
            'remember' => ['nullable', 'boolean'],
        ]);

        $remember = (bool) ($credentials['remember'] ?? false);
        $login = $credentials['login'];

        $attempts = [
            ['email' => $login, 'password' => $credentials['password']],
            ['phone' => $login, 'password' => $credentials['password']],
        ];

        foreach ($attempts as $attempt) {
            if (Auth::attempt($attempt, $remember)) {
                $request->session()->regenerate();

                return redirect()->route('admin.dashboard');
            }
        }

        throw ValidationException::withMessages([
            'login' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
