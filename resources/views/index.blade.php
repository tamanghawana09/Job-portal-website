<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job-portal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <section class="nav-container">
        <div class="box">
            <div class="title"><h2>Jobfind</h2></div>
            <div class="nav">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#main">Find Jobs</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <select name="login" id="login" onchange="redirectlogin()">
                            <option>Login</option>
                            <option value="candidateLogin">Login as User</option>
                            <option value="recruiterLogin">Login as Recruiter</option>
                        </select>
                        <select name="register" id="register" onchange="redirect()">
                            <option>Register</option>
                            <option value="candidateRegister">Register as User</option>
                            <option value="candidateRecruiter">Register as Recruiter</option>
                        </select>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="search">
            <form action="#" method="get">
                @csrf
                    <div class="text">
                        <p class="title ">FIND JOBS,CREATE TRACKABLE RESUMES AND ENRICH YOUR APPLICATIONS.</p><br>
                        <h3 class="heading">The Easiest Way to Get Your New Job</h3>
                    </div>
                    <div class="form-input">
                        <div class="input-group">
                            <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                            <input type="text" name="keywords" placeholder="Keywords">                            
                        </div>
                        <div class="input-group">
                            <span class="icon"><ion-icon name="navigate-outline"></ion-icon></span>
                            <input type="text" name="location" placeholder="Location">
                        </div>
                        <div class="input-group">
                            <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                            <input type="text" name="company" placeholder="Company">
                        </div>
                        <button type="submit">Search</button>
                    </div>
            </form>
        </div>
    </section>
    <section class="main" id="main">
            <h1>Get your dream job right now</h1><br><br>
        <div class="job-lists">
            @foreach ($posts as $value)
            <div class="jobs">
                <h1>{{$value['title']}}</h1>
                <div class="company-desc">
                    <h3>Company Description</h3>
                    <p>{{$value['company_description']}}</p>
                </div>
                <div class="button">
                    <a href="/userSearchJob/read/{{$value['id']}}" class="apply-btn">Read</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <script src="{{asset('js/redirectScript.js')}}"></script>
  </body>
</html>
