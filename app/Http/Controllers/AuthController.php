<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //  REGISTER
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'participant'
        ]);

        Auth::login($user);

        return redirect()->route('home'); 
    }

    //  LOGIN
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate(); 

            $user = Auth::user();

            //  ADMIN
            if ($user->role === 'admin') {
                return redirect('/admin');
            }

            // USER NORMAL
            return redirect()->route('home'); 
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ])->onlyInput('email');
    }

    //  LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('login');
    }
}   