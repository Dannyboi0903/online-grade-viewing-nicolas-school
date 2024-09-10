<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Strand;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Str;

class TeacherController extends Controller
{
    //

    public function show()
    {
        $teachers = Teacher::all();

        return view('admin.teacher', compact('teachers'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $username = $request->first_name[0] . $request->last_name;
        $password = '123';

        Teacher::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name ?? null,
            'last_name' => $request->last_name,
            'username' => Str::lower($username),
            'show_password' => $password,
            'password' => bcrypt($password),
            'role_id' => 2
        ]);

        return redirect()->back();
    }
}
