<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminProfile.css">
    <script src="https://kit.fontawesome.com/be90481885.js" crossorigin="anonymous"></script>
    <title>Job-portal</title>
</head>
<body>
   <section class="nav-container" id="nav-container">
        <div class="sidebar-header" id="sidebar">
            <h1>Job-portal</h1>
        </div>
        <ul class="sidebar-menu">
            <div class="menu">
                <li><a href="{{route('admin-profile')}}"><i class="fa-solid fa-user"></i>Profile</a></li>
                <li><a href="{{route('admin-dashboard')}}"><i class="fa-solid fa-home"></i>Dashboard</a></li>
                <li><a href="{{route('admin-candidate')}}"><i class="fa-solid fa-bars-progress"></i>Candidate Management</a></li>
                <li><a href="{{route('admin-ATS')}}"><i class="fa-solid fa-gauge"></i>Applicant Tracking System</a></li>
                <li><a href="{{route('admin-job-analytics')}}"><i class="fa-solid fa-chart-line"></i>Job Analytics</a></li>
                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
            </div>
            
        </ul>
   </section>
   <section class="main-content" id="main-content">
            <nav>
                <div class="togglebutton">
                    <button id="togglebutton"><i class="fa-solid fa-bars"></i></button>
                </div>
                <div class="title"><h1>Profile</h1></div>
                <div class="admin"><i class="fa-solid fa-user">User</i></div>
            </nav>
            <div class="profile-content">
                <nav>
                    <ul>
                        <li><button id="personal-btn"><i class="fa-regular fa-user"></i>Personal Information</button></li>
                        <li><button id="education-btn"><i class="fa-solid fa-school"></i>Education</button></li>
                        <li><button id="skills-btn"><i class="fa-regular fa-lightbulb"></i>Skills</button></li>
                        <li><button id="training-btn"><i class="fa-solid fa-certificate"></i>Training/Cerification</button></li>
                        <li><button id="email-btn"><i class="fa-regular fa-envelope"></i>Email and Phone Number</button></li>
                    </ul>
                </nav>
            </div>
            <div class="form-content">
                <div class="personal-info">
                    <form action="" method="post" id="personal-info-form">
                        @csrf
                        <div class="profile-desc">
                            <h1>Profile</h1>
                            <div class="image">
                                <p>Add your image here</p>
                            </div>
                        </div>
                        <div class="first-name">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name">
                            @error('fname')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="last-name">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name">
                            @error('lname')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="gender">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option hidden>Select gender</option>
                                <option value="male" id="male">Male</option>
                                <option value="female" id="female">Female</option>
                                <option value="other" id="other">Other</option>
                            </select>
                        </div>
                        <div class="dob">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob">
                        </div>
                        <div class="email">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                
                <div class="education-info">
                    <form action="" method="post" id="education-info-form">
                        @csrf
                        <h1>Education</h1>
                        <div class="institution-desc">
                            <label for="institution">Institution Type:</label>
                            <select name="institution" id="institution">
                                <option hidden>
                                <option value="college">College</option>
                                <option value="school">School</option>
                                <option value="university">University</option>
                                <option value="institute">Institute</option>
                            </select>
                        </div>

                       <div class="school-desc">
                            <label for="school">School/Institution</label>
                            <input type="text" id="school" name="school">
                            @error('school')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                       </div>

                        <div class="degree-desc">
                            <label for="degree">Degree</label>
                            <input type="text" id="degree" name="degree">
                            @error('degree')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="city-desc">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city">
                        </div>
                        <div class="startdate">
                            <label for="startdate">Start Date</label>
                            <input type="date"  id="startdate" name="startdate">
                        </div>
                        <div class="enddate">
                            <label for="enddate">End Date</label>
                            <input type="date" id="enddate" name="enddate">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>

                <div class="skill-info">
                    <form id="skill-info-form">
                        @csrf
                        <h1>Skills</h1>
                        <div class="skill-desc">
                            <label for="skills">Skills</label>
                            <input type="text" id="skills" name="skills">
                            @error('skills')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>

                <div class="training-info">
                    <form action="" method="post" id="training-info-form">
                        @csrf
                        <h1>Training / Certificate</h1>
                        <div class="training-desc">
                            <label for="title">Trainings/Cerification Title :</label>
                            <input type="text" id="training" name="training">
                            @error('training')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="date">
                            <label for="completiondate">Completion Date</label>
                            <input type="date" id="completiondate" name="completiondate">
                        </div>
                        <div class="desc">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit">Add Training</button>
                    </form>
                </div>

                <div class="email-info">
                    <form action="" method="post" id="email-info-form">
                        @csrf
                        <h1>Email & Phone number</h1>
                        <div class="email-desc">
                            <label for="email">Email: </label>
                            <input type="email" id="email" name="email">
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="number-desc">
                            <label for="number">Phone Number:</label>
                            <input type="number" id="number" name="number">
                            @error('number')
                                <div class="text-danger">{{$message}}</div> 
                            @enderror
                        </div>
                        
                        <button type="submit">Save</button>
                    </form>
                </div>
                
            </div>
   </section>
   <script src="js/script.js"></script>
</body>
</html>