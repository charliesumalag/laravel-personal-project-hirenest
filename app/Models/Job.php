<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */

    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'description', 'salary', 'jobtypes', 'experience'];
    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $jobtypes = ['Full Time', 'Part Time', 'Remote', 'Freelance'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'posted_by');
    }
}
