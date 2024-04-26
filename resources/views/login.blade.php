<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobfind</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        input:focus,
        button:focus {
            outline: none;
            border-color: #007bff;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1> Admin Login</h1>
        <form  method="post" action="/signin">
            @csrf
            <input type="text" placeholder="Email" name="email" id="email" required><br><br>
                @error('email')
                <div style="color: red; font-size: small;">{{$message}}</div>
                @enderror
            <input type="password" placeholder="Password" name="password" id="password" required><br><br>
                @error('password')
                <div style="color: red; font-size: small;">{{$message}}</div>
                @enderror
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
