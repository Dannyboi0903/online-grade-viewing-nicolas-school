<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'show_password',
        'password',
        'role_id'
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function section()
    {
        return $this->belongsToMany(Section::class, TeacherSection::class, 'teacher_id', 'id');
    }

    public function strand()
    {
        return $this->belongsToMany(Strand::class, TeacherSection::class, 'teacher_id', 'id');
    }

    public function grade_lvl()
    {
        return $this->belongsToMany(GradeLevel::class, TeacherSection::class, 'teacher_id', 'id');
    }
}
