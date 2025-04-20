<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $queried = Job::filter($request->only(['title', 'location', 'jobtype']));
        $jobs = $queried->latest()->paginate(10);
        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.jobpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $validated = $request->validated();
        $validated['posted_by'] = auth()->id();

        Job::create($validated);
        return redirect()->route('jobs.index')->with('success', 'Job posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job, Request $request)
    {
        $jobsSimilar = Job::similarJob($job)  // Exclude the current active job
            ->latest()
            ->limit(2)
            ->get();
        return view('jobs.jobdetail', [
            'job' => $job,
            'similars' => $jobsSimilar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function myJobPosting(Request $request)
    {
        // $myJobs = Job::where('posted_by', auth()->id())->latest()->paginate();
        $queried = Job::filter($request->only(['title', 'location', 'jobtype']));
        $filtered = $queried->where('posted_by', auth()->id());



        $myJobs = $filtered->latest()->paginate();

        return view('jobs.myjobposting', [
            'jobs' => $myJobs,
        ]);
    }
}
