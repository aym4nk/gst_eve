<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    /* =========================================
       REGISTER
    ========================================= */

    public function register(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6'

        ]);

        // CREATE USER

        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make(
                $request->password
            ),

            // DEFAULT ROLE

            'role' => 'participant'

        ]);

        // LOGIN USER

        Auth::login($user);

        return redirect()
            ->route('home');
    }

    /* =========================================
       LOGIN
    ========================================= */

    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);

        $credentials = $request->only(
            'email',
            'password'
        );

        // LOGIN

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            /* =========================
               ADMIN
            ========================= */

            if ($user->role === 'admin') {

                return redirect()
                    ->route('admin');

            }

            /* =========================
               NORMAL USER
            ========================= */

            return redirect()
                ->route('home');
        }

        // ERROR

        return back()->withErrors([

            'email' => 'Invalid credentials'

        ])->onlyInput('email');
    }

    /* =========================================
       LOGOUT
    ========================================= */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login');
    }
}