<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'sex',
        'date_of_birth',
        'address',
        'phone',
        'image',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->date_of_birth)->age;
    }
}
