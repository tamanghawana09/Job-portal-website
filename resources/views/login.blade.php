<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{route('sign-in')}}" method="post">
        @csrf
        <input type="text" placeholder="email" name="email" id="password"><br><br>
        <input type="password" placeholder="password" name="password" id="password"><br><br>
        <button>Normal login</button>
    </form>
    <form action="{{route('google-auth')}}" method="post">
        @csrf
        <button>Signin with google</button>
    </form>
</body>
</html>