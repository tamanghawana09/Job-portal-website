<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminATS.css">
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
                <div class="title"><h1>Applicant Tracking System</h1></div>
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Search">
                        <button>Search</button>
                    </form>
                </div>
                <div class="admin"><i class="fa-solid fa-user"></i></div>
            </nav>
         
   </section>
   <script src="js/script.js"></script>
</body>
</html>