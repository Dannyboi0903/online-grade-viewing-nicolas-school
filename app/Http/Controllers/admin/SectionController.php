<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Strand;
use App\Models\TeacherSection;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function show()
    {
        $teachers = Teacher::all();
        $grade_lvls = GradeLevel::all();
        $sections = Section::all();
        $strands = Strand::all();
        $assigned_teachers = Teacher::has('section')->get();

        // dd($assigned_teachers);

        return view('admin.section', compact(['teachers', 'grade_lvls', 'sections', 'strands', 'assigned_teachers']));
    }

    public function add(Request $request)
    {
        TeacherSection::create([
            'teacher_id' => $request->teacher,
            'grade_lvl_id' => $request->grade_level,
            'section_id' => $request->section,
            'strand_id' => $request->strand,
        ]);

        return redirect()->route('admin.section');
    }
}
