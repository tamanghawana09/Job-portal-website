<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function apply(Request $request, $jobId){

        $jobPost = JobPost::findOrFail($jobId);

        $employer_id = $jobPost->admin_id;

        
        $jobApplication = new JobApplication();
        $jobApplication->job_id = $jobId;
        $jobApplication->user_id=auth()->user()->id;
        $jobApplication->employer_id = $employer_id;
        $jobApplication->applied_date = now();
        $jobApplication->save();

        return redirect()->back()->with('success',"Job application submitted successfully");
    }
}
