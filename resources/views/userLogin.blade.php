<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobfind</title>
    <style>
        /* CSS for the login page */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .wrapper {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-box {
            margin-bottom: 20px;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: calc(100% - 40px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input-box .icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #777;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .register-link {
            color: #007bff;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        /* CSS for the registration form */
        .register-form {
            display: none;
        }

        .active .login-form {
            display: none;
        }

        .active .register-form {
            display: block;
        }
        .google-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: goldenrod; /* Google's red color */
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px; /* Add margin to separate from other elements */
        }

        .google-btn:hover {
            background-color: #c23321; /* Darken the background color on hover */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="login-form">
            <h2>User Login</h2>
            <div class="form-box">
                <form action="{{route('user-signin')}}" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" required>
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        @error('email')
                        <div style="color: red; font-size: small;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        @error('password')
                        <div style="color: red; font-size: small;">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn">Login</button>
                </form>
                
            </div>
            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </div>

        <div class="register-form">
            <h2>User Register</h2>
            <div class="form-box">
                <form action="{{route('user-signup')}}" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username" id="username" required>
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        @error('username')
                        <div style="color: red; font-size: small;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" id="email" required>
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        @error('email')
                        <div style="color: red; font-size: small;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" id="password" name="password" required>
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        @error('password')
                        <div style="color: red; font-size: small;">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn">Register</button>
                </form>
            </div>
            <form action="{{route('google-auth')}}" method="post">
                @csrf
                <button class="google-btn">Signin with google</button>
            </form>
            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </div>
    </div>

    <script>
        // JavaScript to toggle between login and registration forms
        const wrapper = document.querySelector('.wrapper');
        const loginForm = document.querySelector('.login-form');
        const registerForm = document.querySelector('.register-form');
        const registerLink = document.querySelector('.register-link');
        const loginLink = document.querySelector('.login-link');

        registerLink.addEventListener('click', () => {
            wrapper.classList.toggle('active');
        });

        loginLink.addEventListener('click',()=>{
            wrapper.classList.toggle('active');
        });
    </script>
</body>
</html>
