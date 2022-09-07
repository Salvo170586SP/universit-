<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
    ];


    
      /**
     * Get the players for the team.
     * ******************************
     * Prendo gli students(studenti) da course(corso)
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    
      /**
     * Get the players for the team.
     * ******************************
     *  i professori hanno un corso
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
