<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/userProfile.css') }}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Jobfind</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{route('user-dashboard')}}" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('search-job')}}" class="sidebar-link">
                         <i class="lni lni-search"></i>
                        <span>Search Opportunities</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('user-profile')}}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('user-application')}}" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Application</span>
                    </a>
                </li>

                
                <li class="sidebar-item">
                    <a href="{{route('user-contact')}}" class="sidebar-link">
                        <i class="lni lni-phone"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{route('user-logout')}}" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="title">
                    <h1>Profile</h1>
                </div>
            </nav>
            <section class="main-content" id="main-content">
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
                    <form action="{{route('store.data')}}" method="post" id="personal-info-form" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-desc">
                            <h1>Profile</h1>
                            <div class="image">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="first-name">
                            <label for="fname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name">
                            @error('fname')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="last-name">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name">
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
                            <div class="resume">
                                <label for="resume">Resume:</label>
                                <input type="file" name="resume">
                            </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                
                <div class="education-info">
                    <form action="{{route('store.education')}}" method="POST" id="education-info-form">
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
                    <form  action="{{route('store.skill')}}" method="POST" id="skill-info-form">
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
                    <form action="{{route('store.training')}}" method="post" id="training-info-form">
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
                    <form action="{{route('store.email')}}" method="post" id="email-info-form">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="{{asset('js/script.js')}}"></script>
</body>

</html>