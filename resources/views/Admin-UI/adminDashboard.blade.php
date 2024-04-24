<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboardStyles.css">
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
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Search">
                        <button>Search</button>
                    </form>
                </div>
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

        <div class="chart-content">
            <div class="grid">
                <div class="bar-chart">
                    <div class="lang">Comparision of Metrics</div>
                    <div class="desc">Bar graph showing the number of job applications received from different sources (job industry)</div>    
                </div>
                <div class="pie-chart">
                    <div class="lang">Application Status Distribution</div>
                    <div class="desc">A pie chart to show the distribution of job applications by their status. This could include categories such as "Under Review", "Rejected", "Interview Scheduled" and "Hired".This visualization can give companies a quick overview of the current status of their hiring pipeline.
                    </div>
                </div>
                <div class="bar-chart">
                    <div class="lang">Trends over time</div>
                    <div class="desc">Display trends over time using bar graphs. For instance, you could create a bar graph showing the number of job applications received each month over the past year.</div>
                </div>
                <div class="pie-chart">
                    <div class="lang">Skill Set Distribution</div>
                    <div class="desc">Stats with the people with different types of skill set.</div>
                </div>
            </div>
        </div>
   </section>
   <script src="js/script.js"></script>
</body>
</html>