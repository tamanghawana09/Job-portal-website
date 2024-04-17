<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="/signup" method="post">
        @csrf
        <input type="text" placeholder="email" id="email" name="email"><br><br>
        <input type="text" placeholder="username" id="username" name="username"><br><br>
        <input type="password" placeholder="password" id="password" name="password"><br><br>
        <button>cRegister</button>
    </form>
</body>
</html>