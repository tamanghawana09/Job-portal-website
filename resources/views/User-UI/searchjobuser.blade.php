<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-portal</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Application</span>
                    </a>
                </li>

                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
                    <h1>Search Jobs</h1>
                </div>
            </nav>
            <div class="container">
    <div class="row ">
        @foreach ($posts as $value )
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$value['title']}}</h5>
                    <div class="company-desc mb-3">
                        <h6 class="card-subtitle mb-2 text-muted">Company Description:</h6>
                        <p class="card-text">{{$value['company_description']}}</p>
                    </div>
                    <div class="role-desc mb-3">
                        <h6 class="card-subtitle mb-2 text-muted">Role:</h6>
                        <p class="card-text">{{$value['role']}}</p>
                    </div>
                    <div class="posted-by mb-3">
                        @php
                        $admin = \App\Models\User::find($value['admin_id']);
                        @endphp
                        <h6 class="card-subtitle mb-2 text-muted">Posted by:</h6>
                        <p class="card-text">{{$admin->username}}</p>
                    </div>
                    <div class="button">
                        <a href="" class="btn btn-success btn-sm apply-btn">Apply</a>
                        <a href="" class="btn btn-secondary btn-sm read-btn">Read</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</div>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="{{ asset('js/scriptUser.js') }}"></script>
</body>

</html>