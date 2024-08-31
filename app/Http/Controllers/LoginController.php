<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('login.admin'); // Adjust the view path if necessary
    }

    /**
     * Handle a login request.
     */
    public function adminLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('admin')->attempt($request->except(['_token']))) {
            // Authentication passed
            return redirect()->route('admin.dashboard'); // Adjust the redirect path if necessary
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }

    /**
     * Log the user out.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.admin'); // Redirect to login page after logout
    }
}
