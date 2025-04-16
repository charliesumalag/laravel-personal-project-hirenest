<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $bestCompanies = Job::query()->limit(6)->get();
        $jobs = Job::query()->limit(8)->get();
        return view('index', [
            'jobs' => $jobs,
            'bestCompanies' => $bestCompanies,
        ]);
    }
}
