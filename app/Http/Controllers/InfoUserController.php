<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfoUserController extends Controller
{
    /* =========================
       PROFILE PAGE
    ========================= */

    public function index()
    {
        return view('profil');
    }

    /* =========================
       UPDATE USER
    ========================= */

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'nullable|min:6'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // update password only if filled

        if($request->password){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully');
    }
    /* =========================================
    DELETE USER
    ========================================= */

    public function destroy($id)
    {
        // ONLY ADMIN

        if (auth()->user()->role !== 'admin') {

            return redirect('/');

        }

        $user = User::findOrFail($id);

        // ADMIN MAYMSE7CH RASSO

        if ($user->id == auth()->id()) {

            return back();

        }

        $user->delete();

        return back();
    }
}