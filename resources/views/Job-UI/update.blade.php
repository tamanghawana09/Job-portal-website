<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createJob.css') }}">
    <title>Jobfind</title>
</head>
<body>
    <div class="form-content">
        <h1>Create a Job</h1>
        <form action="/job-analytics/update/{{$data['id']}}" method="post">
            @csrf
            <div class="title">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$data['title']}}">
            </div>
            <div class="about">
                <label for="about" class="form-label">Company description</label>
                <textarea name="company_description" id="description" cols="30" rows="10" >{{$data['company_description']}}</textarea>
            </div>
            <div class="role">
                <label class="form-label" for="role-description">Role/Description:</label>
                <textarea name="role" id="role" cols="30" rows="10">{{$data['role']}}</textarea>
            </div>
            <div class="qualification">
                <label class="form-label" for="qualification">Qualification:</label>
                <textarea name="qualification" id="qualification" cols="30" rows="10">{{$data['qualification']}}</textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>