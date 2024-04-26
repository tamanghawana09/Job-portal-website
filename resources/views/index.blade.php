<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobfind</title>
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
    <section class="about">
        <div class="text"><h3>About Us:</h3></div>
        <div class="container">
            <div class="about-left">
                <img src="{{ asset('images/Jobfind.png') }}" alt="Jobfind">
            </div>
            <div class="about-right">
                <h2>JobFind</h2>
                <p>Welcome to JobFind! We're the bridge between talent and opportunity. Our platform offers a seamless experience for job seekers and businesses alike. With user-friendly features and a commitment to excellence, we ensure that finding the perfect match is both easy and fulfilling. Join our community today and let's build your future together, because at JobFind, your success is our priority.</p>
            </div>
        </div>
    </section>
    <section id="contact" class="contact" title="Contact">
            <div class="text">
                <h3>Contact Us:</h3>
            </div>
            <div class="contact-container">
                <div class="contact-left">
                    <div>
                        <span>📌</span>
                        <h3>Office Address</h3>
                        <span>Kamalpokhari</span>
                        <span>Kathmandu,Nepal</span>
                    </div>
                    <div>
                        <span>📞</span>
                        <h3>Call us</h3>
                        <span>+977-1-5201060</span>
                    </div>
                    <div>
                        <span>📨</span>
                        <h3>Email Address</h3>
                        <span>jobfind@gmail.com</span>
                    </div>
                </div>
                <div class="contact-right">
                    <form method="post">
                        <input  name="name" id="name" type="text" placeholder="Full Name"/>
                        <input  name="email" id="email" type="text" placeholder="Email Address">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        <button> <a href="https://formsubmit.co/el/xomavo" target="_blank">Send Message</a></button>
                    </form>
                </div>
            </div>
         </section>
    <section title="Map">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1816964577865!2d85.32262501132232!3d27.7116757760807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190f4a71326b%3A0x1e54c69290d012c6!2z4KSV4KS_4KS34KWN4KSfIOCkleCksuClh-CknCDgpKTgpKXgpL4g4KSu4KS-LuCkteCkvy4!5e0!3m2!1sen!2snp!4v1714152657901!5m2!1sen!2snp" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </section>
    <footer>
        <span>Copyright © 2024 JobFind</span>
    </footer>
    <script src="{{asset('js/redirectScript.js')}}"></script>
  </body>
</html>
