<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */

    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'description', 'salary', 'jobtypes', 'experience', 'posted_by'];
    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $jobtypes = ['Full Time', 'Part Time', 'Remote', 'Freelance'];


    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'posted_by');
    }

    // scopes / query
    public function scopeSimilarJob($query, Job $job)
    {
        return $query->where('title', 'like', '%' . $job->title . '%')
            ->where('id', '!=', $job->id);;
    }

    public function scopeFilter($query, $filters)
    {
        return $query->when($filters['title'] ?? false, fn($q, $title) => $q->where('title', 'like', '%' . $title . '%'))
            ->when($filters['location'] ?? false, fn($q, $location) => $q->where('location', 'like', '%' . $location . '%'))
            ->when($filters['jobtype'] ?? false, fn($q, $jobtypes) => $q->where('jobtypes', 'like', '%' . $jobtypes . '%'));
    }
}
