<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminProfile.css">
    <script src="https://kit.fontawesome.com/be90481885.js" crossorigin="anonymous"></script>
    <title>Jobfind</title>
</head>
<body>
   <section class="nav-container" id="nav-container">
        <div class="sidebar-header" id="sidebar">
            <h1>Jobfind</h1>
        </div>
        <ul class="sidebar-menu">
            <div class="menu">
                <li><a href="{{route('admin-profile')}}"><i class="fa-solid fa-user"></i>Profile</a></li>
                <li><a href="{{route('admin-dashboard')}}"><i class="fa-solid fa-home"></i>Dashboard</a></li>
                <li><a href="{{route('admin-candidate')}}"><i class="fa-solid fa-bars-progress"></i>Candidate Management</a></li>
                <li><a href="{{route('admin-job-analytics')}}"><i class="fa-solid fa-chart-line"></i>Job Analytics</a></li>
                <li><a href="{{route('admin-logout')}}"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
            </div>
            
        </ul>
   </section>
   <section class="main-content" id="main-content">
            <nav>
                <div class="togglebutton">
                    <button id="togglebutton"><i class="fa-solid fa-bars"></i></button>
                </div>
                <div class="title"><h1>Profile</h1></div>
                <div class="admin"><i class="fa-solid fa-user"></i></div>
            </nav>
            <div class="profile-form">
        <h2>Admin Profile</h2>
        <form action="{{route('store-profile')}}" method="POST">
            @csrf
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <div style="color: red; font-size: small;">{{$message}}</div>
            @enderror

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="summary">Professional Summary:</label>
            <textarea id="summary" name="summary" rows="4" required></textarea>

            <label for="education">Education:</label>
            <input type="text" id="education" name="education" required>

            <label for="experience">Work Experience:</label>
            <textarea id="experience" name="experience" rows="4" required></textarea>

            <label for="skills">Skills:</label>
            <input type="text" id="skills" name="skills" required>

            <label for="responsibilities">Responsibilities:</label>
            <textarea id="responsibilities" name="responsibilities" rows="4" required></textarea>

            <label for="achievements">Achievements:</label>
            <textarea id="achievements" name="achievements" rows="4" required></textarea>

            <label for="affiliations">Professional Affiliations:</label>
            <input type="text" id="affiliations" name="affiliations">

            <label for="attributes">Personal Attributes:</label>
            <input type="text" id="attributes" name="attributes">

            <label for="languages">Languages:</label>
            <input type="text" id="languages" name="languages">

            <button type="submit">Submit</button>
        </form>
            
   </section>
   <script src="js/dashboard.js"></script>
</body>
</html>