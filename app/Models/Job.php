<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */

    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'description', 'salary', 'jobtypes', 'experience'];
    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $jobtypes = ['Full Time', 'Part Time', 'Remote', 'Freelance'];
}
