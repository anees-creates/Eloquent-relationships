<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //inverse of the one-to-one relationship with Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    protected $guarded = [];
    public $timestamps = false;
}
