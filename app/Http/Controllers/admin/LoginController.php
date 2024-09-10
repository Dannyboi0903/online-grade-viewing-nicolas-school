<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        if (Auth::guard('acad_chairperson')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('login.admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('acad_chairperson')->attempt($request->except(['_token']))) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('acad_chairperson')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.admin');
    }
}
