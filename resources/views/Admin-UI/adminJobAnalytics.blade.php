<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminJobAnalytics.css">
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
                <div class="title"><h1>Job-Analytics</h1></div>
                <div class="admin"><i class="fa-solid fa-user">user</i></div>
            </nav>
            <div class="dashboard-content">
                <div class="grid">
                    <a href="{{route('create-job')}}">
                        <div class="item1">
                            <div class="lang">Create Job Post</div>
                        </div>
                    </a>
                    
                    <a href="{{route('view-application')}}">
                        <div class="item2">
                            <div class="lang">View Applications</div>
                        </div>
                    </a>
                    <a href="{{route('rejected-application')}}">
                        <div class="item3">
                            <div class="lang">Rejected Applications</div>
                        </div>
                    </a>
                <a href="{{route('pending-application')}}">
                        <div class="item4">
                            <div class="lang">Pending Applications</div>   
                        </div>
                </a>
                </div>
            </div>
            <div class="post-content">
                @foreach ($posts as $value )
                <div class="post">
                    <h1>{{$value['title']}}</h1>
                    <div class="company-desc">
                        <h3>Company Description:</h3>
                        <p>{{$value['company_description']}}</p>
                    </div>
                    <div class="role-desc">
                        <h3>Role:</h3>
                        <p>{{$value['role']}}</p>
                    </div>
                    <div class="button">
                        <a href="/job-analytics/read/{{$value['id']}}" class="read-btn">Read</a></button>
                        <a href="/job-analytics/edit/{{$value['id']}}" class="edit-btn">Edit</a></button>
                        <a href="/job-analytics/delete/{{$value['id']}}" class="delete-btn">Delete</a></button>
                    </div>
                </div>
                @endforeach
            </div>
   </section>
   <script src="js/script.js"></script>
</body>
</html>