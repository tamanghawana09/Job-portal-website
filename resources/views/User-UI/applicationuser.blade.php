<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobfind</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/userDasboard.css') }}">
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
                    <h1>Application</h1>
                </div>
            </nav>
            <div class="container">
                <h2 class="mt-4 mb-3">My Applied Jobs</h2>

                @if ($jobApplications->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($jobApplications as $application)
                            <li class="list-group-item">
                                <h5 class="card-title">{{ $application->jobPost->title }}</h5>
                                <p class="card-text">{{ $application->jobPost->company_description }}</p>
                                <p class="card-text"><small class="text-muted">Applied Date: {{ $application->created_at->format('M d, Y') }}</small></p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @else
                <p class="mt-3">No applied jobs found.</p>
                @endif
            </div>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scriptUser.js') }}"></script>
</body>

</html>