<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/userContact.css') }}">
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
                    <h1>Contact</h1>
                </div>
            </nav>
            <section id="contact">
                <div class="container">
                    <h2 class="section-title">Contact Information</h2>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:jobfind@gmail.com" class="contact-link">jobfind@gmail.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>9808691807</span>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-item"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-item"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-item"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="contact-form">
                        <h3 class="form-title">Get in Touch</h3>
                        <form action="{{route('contact.submit')}}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Your Name" class="form-input">
                            <input type="email" name="email" placeholder="Your Email" class="form-input">
                            <input type="text" name="subject" placeholder="Subject" class="form-input">
                            <textarea name="message" placeholder="Your Message" class="form-input"></textarea>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scriptUser.js') }}"></script>
</body>

</html>