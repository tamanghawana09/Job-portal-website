<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function createJob(){
        return view('Job-UI.createJob');
    }
    public function viewApplication(){
        return view('Job-UI.viewApplication');
    }
    public function rejectedApplication(){
        return view('Job-UI.rejectedApplication');
    }
    public function pendingApplication(){
        return view('Job-UI.pendingApplication');
    }

    public function submitJob(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'company_description' => 'required|string',
                'role' => 'required|string',
                'qualification' => 'required|string',
                'location' => 'required|string',
            ]);

            $adminId = Auth::id();
            $job = new JobPost();
            $job->title = $validatedData['title'];
            $job->company_description = $validatedData['company_description'];
            $job->role = $validatedData['role'];
            $job->qualification = $validatedData['qualification'];
            $job->location = $validatedData['location'];
            $job->admin_id = $adminId;
            $job->save();

            return redirect(route('admin-job-analytics'));
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function deleteJob($id){
        $data = JobPost::find($id);
        $data->delete();

        return redirect(route('admin-job-analytics'));
    }
    public function readJob($id){
        $post = JobPost::findOrFail($id);
        return view('Job-UI.read',['post'=>$post]);
    }

    public function editJob($id){
        $data = JobPost::find($id);
        return view('Job-UI.update',['data'=>$data]);
    }

    public function updateJob($id, Request $request){
        $data = JobPost::find($id);
        $data->title = $request->title;
        $data->company_description = $request->company_description;
        $data->role = $request->role;
        $data->qualification = $request->qualification;

        $data->update();

        return redirect(route('admin-job-analytics'));

    }

}
