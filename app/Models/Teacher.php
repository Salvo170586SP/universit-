<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'surname'
    ];

    
      /**
     * Get the players for the team.
     * ******************************
     * un corso ha un professore 
     */
    public function course()
    {
        return $this->hasOne(Course::class);
    }
}
