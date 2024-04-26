<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/read.css') }}">
    <title>Job-portal</title>
</head>
<body>
    <div class="read-post">
            <div class="post">
                <h1>{{$post->title}}</h1>
                <p>{{$post->created_at}}</p>
                <div class="company-desc">
                    <h3>Company Description:</h3>
                    <p>{{$post->company_description}}</p>
                </div>
                <div class="role-desc">
                    <h3>Role:</h3>
                    <p>{{$post->role}}</p>
                </div>
                <div class="qualification-desc">
                    <h3>Qualification:</h3>
                    <p>{{$post->qualification}}</p>
                </div>
                <div class="location-desc">
                    <h3>Location:</h3>
                    <p>{{$post->location}}</p>
                </div>
                <div class="button">
                    <a href="{{route('search-job')}}">Go Back</a>
                </div>
            </div>
    </div>
   
</body>
</html>