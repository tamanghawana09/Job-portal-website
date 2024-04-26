<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\education;
use App\Models\email;
use App\Models\JobPost;
use App\Models\skill;
use App\Models\training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function userLogin(){
        return view('userLogin');
    }

    public function userDashboard(){
        return view('User-UI.dashboarduser');
    }
    public function userProfile(){
        return view('User-UI.profileuser');
    }
    public function userSearchJob(){
        $posts =JobPost::all();
        return view('User-UI.searchjobuser',['posts'=>$posts]);
    }
    public function readPost($id){
        $post = JobPost::findOrFail($id);
        return view('User-UI.readpost',['post'=>$post]);
    }

    public function userApplication(){
        return view('User-UI.applicationuser');
    }
    public function userContact(){
        return view('User-UI.contactuser');
    }

    public function userSignup(Request $req){
        $req->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
        ]);
        $role_id =0;
        
        $user = User::create ([
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'username' => $req->username,
            'role_id' => $role_id,
        ]);
        Auth::login($user);
        return redirect()->route('user-login');
    }

    public function userSignin(Request $req){
        $req->validate([
            'email' =>'required|email',
            'password' => 'required',
        ]);
        $credentials = $req->only('email','password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id === 0) {
                return redirect()->route('user-dashboard');
            }
        }
        return redirect()->back()->with('error','Invalid credentials');
    }

    public function userlogout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function detailStore(Request $request){
        try{
            $validatedData = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'resume' => 'required|mimes:pdf,doc,docx|max:2048',
                'firstname' =>'required|string|max:55',
                'lastname' =>'required|String',
                'gender' =>'required|string',
                'dob' => 'required',
                'email' =>'required|email',
            ]);

            $imagePath = $request->file('image')->store('images','public');
            $resumePath = $request->file('resume')->store('resumes','public');
     
            $detail = new Details();
            $detail->image_path = $imagePath;
            $detail->resume_path = $resumePath;
            $detail->firstname = $validatedData['firstname'];
            $detail->lastname = $validatedData['lastname'];
            $detail->gender = $validatedData['gender'];
            $detail->dob = $validatedData['dob'];
            $detail->email = $validatedData['email'];
            $detail->save();
           
            return redirect(route('user-profile'));

        }catch(\Exception $e){
            return "Error : " . $e->getMessage();
        }
    }

    public function educationStore(Request $request){
        try{
            $validatedData = $request->validate([
                'institution' => 'required|string',
                'school' => 'required|string',
                'degree' => 'required|string',
                'city' => 'required|string',
                'startdate' => 'required',
                'enddate' => 'required',
            ]);

     
            $education = new education;
            $education->institution = $validatedData['institution'];
            $education->school = $validatedData['school'];
            $education->degree = $validatedData['degree'];
            $education->city = $validatedData['city'];
            $education->startdate = $validatedData['startdate'];
            $education->enddate = $validatedData['enddate'];
            $education->save();
           
            return redirect(route('user-profile'));

        }catch(\Exception $e){
            return "Error : " . $e->getMessage();
        }
    }


    public function skillStore(Request $request){
        try{
            $validatedData = $request->validate([
                'skills' =>'required|string',
            ]);

            $skill = new skill;
            $skill->skills = $validatedData['skills'];
            $skill->save();
           
            return redirect(route('user-profile'));

        }catch(\Exception $e){
            return "Error : " . $e->getMessage();
        }
    }

    public function trainingStore(Request $request){
        try{
            $validatedData = $request->validate([
                'training' =>'required|string',
                'completiondate' =>'required',
                'description' =>'required',
            ]);

            $training = new training;
            $training->training = $validatedData['training'];
            $training->completiondate = $validatedData['completiondate'];
            $training->description = $validatedData['description'];
            $training->save();
           
            return redirect(route('user-profile'));

        }catch(\Exception $e){
            return "Error : " . $e->getMessage();
        }
    }

    public function emailStore(Request $request){
        try{
            $validatedData = $request->validate([
                'email' =>'required|email',
                'number' =>'required',
            ]);

            $email = new email;
            $email->email = $validatedData['email'];
            $email->number= $validatedData['number'];
            $email->save();
           
            return redirect(route('user-profile'));

        }catch(\Exception $e){
            return "Error : " . $e->getMessage();
        }
    }
}
