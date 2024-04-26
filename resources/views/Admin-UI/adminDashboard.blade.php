<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboardStyles.css">
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
                <div class="title"><h1>Dashboard</h1></div>
                <div class="admin"><i class="fa-solid fa-user"></i></div>
            </nav>

        <div class="dashboard-content">
            <div class="grid">
                <div class="item">
                    <div class="lang">Current Application</div>
                    <div class="total">60</div>
                </div>
                <div class="item">
                    <div class="lang">Total Applications</div>
                    <div class="total">100</div>
                </div>
                <div class="item">
                    <div class="lang">Rejected Application</div>
                    <div class="total">40</div>
                </div>
                <div class="item">
                    <div class="lang">Interview Scheduled</div>
                    <div class="total">20</div>
                </div>
            </div>
        </div>

        <table class="job-applications">
            <thead>
                <tr>
                    <th>Applicant Id</th>
                    <th>Applicant Name</th>
                    <th>Job Title</th>
                    <th>Applied Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->user->id }}</td>
                    <td>{{ $application->user->username }}</td>
                    <td>{{ $application->job->title }}</td>
                    <td>{{ $application->applied_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

   </section>
   <script src="js/dashboard.js"></script>
</body>
</html>