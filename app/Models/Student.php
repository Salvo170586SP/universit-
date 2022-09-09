<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'role_id',
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
