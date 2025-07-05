<header class="video-header position-relative text-white overflow-hidden">

    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{ asset('assets/videos/header-bg.mp4-bak') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="header-content position-relative z-1 py-4">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">

                <!-- Logo / Brand Name -->
                <!-- <div class="col-12 col-lg-3 mb-2 mb-lg-0 text-lg-start text-center">
                    <h4 class="mb-0">
                        <a href="{{ url('/') }}" class="text-white text-decoration-none d-inline-flex align-items-center">
                            <i class="fas fa-laptop-code me-2"></i>
                            <span class="fw-bold">JobAssams</span><span class="fw-bold text-warning">.Com</span>
                        </a>
                    </h4>
                </div> -->

            <div class="col-12 col-lg-3 mb-2 mb-lg-0 text-lg-start text-center">
                <a href="{{ url('/') }}" class="text-decoration-none d-inline-flex flex-column align-items-center">
                    <img src="{{ asset('assets/icons/jobassams_logo.png') }}" alt="JobAssams Logo" style="width: 200px; height: auto;">
                    <!-- <span class="fw-bold text-white mt-2" style="font-size: 1.2rem;">
                        JobAssams<span class="text-warning">.Com</span>
                    </span> -->
                </a>
            </div>


                <!-- Search Bar -->
                <div class="col-12 col-lg-6">
                    <form method="GET" action="{{ url('/search') }}">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search jobs, exams, updates..." required>
                            <button class="btn btn-light" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 d-none d-lg-block text-end">
                    <div class="d-inline-flex align-items-center gap-2">
                        <a href="https://chat.whatsapp.com/your-invite-link" target="_blank" class="btn btn-success btn-sm btn-social">
                            <i class="fab fa-whatsapp me-1"></i> Join WhatsApp
                        </a>
                        <a href="https://t.me/your-channel-link" target="_blank" class="btn btn-primary btn-sm btn-social">
                            <i class="fab fa-telegram me-1"></i> Join Telegram
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>