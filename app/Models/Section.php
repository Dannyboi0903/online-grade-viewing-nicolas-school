<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name',
        'adviser_id',
        'grade_level',
        'section',
        'strand',
    ];

    public function adviser()
    {
        return $this->belongsTo(User::class, 'adviser_id');
    }

}
