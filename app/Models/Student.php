<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'role_id',
        'course_id',
        'gender'
    ];

     /**
     * Get the players for the team.
     * ******************************
     * Prendo gli students(studenti) da course(corso)
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
