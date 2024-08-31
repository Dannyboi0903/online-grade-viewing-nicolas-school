<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\AcadChairperson;
use App\Models\User;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->except(['_token']))) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        // If authentication fails, redirect back with an error
        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);

        // if ($user && Hash::check($request->input('password'), $user->password)) {
        //     // Log the user in
        //     Auth::login($user);

        //     // Redirect to the admin dashboard
        //     return redirect()->route('login.admin.submit');
        // }

        // // If authentication fails, redirect back with an error
        // return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.admin');
    }
}
