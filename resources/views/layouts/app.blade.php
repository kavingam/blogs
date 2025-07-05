<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v={{ time() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    @if (Request::is('/')) {{-- Show only on home --}}
        @include('partials.video-header')
    @endif

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg bg-white text-dark p-0" style="font-size: clamp(12px, 2vw, 16px);">
        <div class="container">
            <!-- Brand -->
            <!-- <a class="navbar-brand" href="/"><i class="fas fa-home me-1"></i>Home</a> -->
            <a class="navbar-brand text-dark" style=" font-size: clamp(12px, 2vw, 16px);" href="/">
                @if (Request::is('/'))
                    <i class="fas fa-home me-1"></i>Home
                @else
                    <img src="{{ asset('assets/icons/jobassams_logo.png') }}" alt="Logo" height="30">
                    <!-- <img src="{{ asset('assets/images/Jobassams-logo.png') }}" alt="Logo" height="30"> -->
                    <!-- <img src="{{ asset('icons/jobassams_logo.png') }}" alt="Logo" height="30"> -->
                @endif
            </a>
            <!-- Toggler -->
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <button class="navbar-toggler border-0" style="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <button class="navbar-togglerx custom-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="toggler-line"></span>
                <span class="toggler-line"></span>
                <span class="toggler-line"></span>
            </button> -->


            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><i class="fas fa-info-circle me-1"></i>About</a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fas fa-envelope me-1"></i>Contact</a>
                    </li>

                    <!-- Gallery -->
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery"><i class="fas fa-images me-1"></i>Gallery</a>
                    </li>

                    <!-- Sitemap -->
                    <li class="nav-item">
                        <a class="nav-link" href="/sitemap"><i class="fas fa-sitemap me-1"></i>Sitemap</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/service"><i class="fas fa-tools me-1"></i>Service</a>
                    </li>                    

                    <!-- Aspirants Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aspirantsDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-graduate me-1"></i>Aspirants
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="aspirantsDropdown" style="font-size: clamp(12px, 2vw, 16px);">
                            <li><a class="dropdown-item" href="/career"><i class="fas fa-briefcase me-1"></i>Career</a></li>
                            <li><a class="dropdown-item" href="/courses"><i class="fas fa-laptop me-1"></i>Online Course</a></li>
                            <li><a class="dropdown-item" href="/certificate"><i class="fas fa-certificate me-1"></i>Certificate</a></li>
                        </ul>
                    </li>

                    <!-- Account Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-1"></i>Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown" style="font-size: clamp(12px, 2vw, 16px);">
                            <li><a class="dropdown-item" href="/register"><i class="fas fa-user-plus me-1"></i>Register</a></li>
                            <li><a class="dropdown-item" href="/login"><i class="fas fa-sign-in-alt me-1"></i>Login</a></li>
                            <li><a class="dropdown-item" href="/forgot-password"><i class="fas fa-unlock-alt me-1"></i>Forgot Password</a></li>
                            <li><a class="dropdown-item" href="/employees"><i class="fas fa-users me-1"></i>Employees</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/terms">
                            <i class="fas fa-file-contract me-1"></i>Terms & Conditions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/privacy">
                            <i class="fas fa-user-shield me-1"></i>Privacy Policy
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/declaration">
                            <i class="fas fa-scroll me-1"></i>Declaration
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Secondary Options Bar -->
    <nav class="fs-nav">
        <div class="container px-3">
            <div class="d-flex overflow-auto flex-nowrap py-2-bak gap-3">

                <a href="/latest-jobs" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-briefcase me-1"></i>Latest Jobs
                </a>

                <a href="/admit-cards" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-id-card me-1"></i>Admit Cards
                </a>

                <a href="/results" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-chart-line me-1"></i>Results
                </a>

                <a href="/notes" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-book me-1"></i>Notes
                </a>

                <a href="/question-paper" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-file-alt me-1"></i>Question Paper
                </a>


                <a href="/answer-keys" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-key me-1"></i>Answer Keys
                </a>

                <a href="/syllabus" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-book me-1"></i>Syllabus
                </a>

                <a href="/admissions" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-university me-1"></i>Admissions
                </a>

                <a href="/notifications" class="fs-nav-item flex-shrink-0">
                    <i class="fas fa-bell me-1"></i>Notifications
                </a>

            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-muted pt-5 border-top mt-5">
        <div class="container text-center-bak text-start text-md-start">
            <div class="row">

                <!-- Career Options -->
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h5 class="text-uppercase fw-bold mb-3">
                        <i class="fas fa-briefcase me-2"></i>Career Options
                    </h5>
                    <ul class="list-unstyled footer-links-css">
                        <li><a href="#" class="text-reset">Govt Jobs</a></li>
                        <li><a href="#" class="text-reset">Private Jobs</a></li>
                        <li><a href="#" class="text-reset">Defence Jobs</a></li>
                        <li><a href="#" class="text-reset">Banking Jobs</a></li>
                    </ul>
                </div>

                <!-- Exam & Admit Info -->
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h5 class="text-uppercase fw-bold mb-3">
                        <i class="fas fa-file-alt me-2"></i>Admit & Exams
                    </h5>
                    <ul class="list-unstyled footer-links-css">
                        <li><a href="{{ route('admitcards.index') }}" class="text-reset">Admit Cards</a></li>
                        <li><a href="{{ route('results.index') }}" class="text-reset">Results</a></li>
                        <li><a href="#" class="text-reset">Exam Dates</a></li>
                        <li><a href="{{ route('syllabus.index') }}" class="text-reset">Syllabus</a></li>
                    </ul>
                </div>

                <!-- Blog & Articles -->
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h5 class="text-uppercase fw-bold mb-3">
                        <i class="fas fa-blog me-2"></i>Blogs & Tips
                    </h5>
                    <ul class="list-unstyled footer-links-css">
                        <li><a href="#" class="text-reset">Preparation Tips</a></li>
                        <li><a href="#" class="text-reset">Job Alerts</a></li>
                        <li><a href="#" class="text-reset">Resume Guide</a></li>
                        <li><a href="#" class="text-reset">Interview Tips</a></li>
                    </ul>
                </div>

                <!-- Contact & Subscribe -->
                <div class="col-md-3 col-lg-3 col-xl-3 mb-4">
                    <h5 class="text-uppercase fw-bold mb-3">
                        <i class="fas fa-envelope me-2"></i>Stay Updated
                    </h5>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('subscribe') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>


                    <ul class="list-unstyled footer-links-css">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Assam, India</li>
                        <li><i class="fas fa-envelope me-2"></i> bhaitigam71@gmail.com</li>
                        <li><i class="fas fa-phone me-2"></i> +91 9707212121</li>
                    </ul>
                </div>
            </div>

            <!-- Social Media -->
            <div class="text-center py-3 border-top">
                <a href="#" class="text-reset me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#" class="text-reset me-3"><!--i class="fab fa-x-twitter fa-lg"></i --><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-reset me-3"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-reset me-3"><i class="fab fa-telegram fa-lg"></i></a>
                <a href="#" class="text-reset me-3"><i class="fab fa-youtube fa-lg"></i></a>
            </div>

            <!-- Copyright -->
            <div class="text-center py-2 small">
                &copy; {{ date('Y') }} JobAssams.com — Assam's Career & Job News Portal. All rights reserved.
            </div>
        </div>
    </footer>


    <script>
        document.querySelector('.custom-toggler').addEventListener('click', function () {
            this.classList.toggle('active');
        });
    </script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
