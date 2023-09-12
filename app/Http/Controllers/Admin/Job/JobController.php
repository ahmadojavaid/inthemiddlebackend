<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::where('j_status',1)->get();
        return view('admin.jobs.index',compact('jobs'));
    }
}
