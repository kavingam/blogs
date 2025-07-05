@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<div class="container my-5">
    <div class="row">
        <!--  MAIN BLOG CONTENT -->
        <div class="col-lg-9 order-1 order-lg-1">

            <h4 class="mb-4">Category: Education</h4>

            <!-- Cards Grid -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- Blog Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 1</h5>
                            <p class="card-text">Short educational insight.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Repeat 5 more cards... -->
                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 2</h5>
                            <p class="card-text">Online learning strategies for 2025.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 3</h5>
                            <p class="card-text">Entrance exams and results tips.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 4</h5>
                            <p class="card-text">New education reforms in India.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 5</h5>
                            <p class="card-text">Top skills for students in 2025.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 6</h5>
                            <p class="card-text">Scholarship tips for higher studies.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-4 d-flex justify-content-between">
                <button class="btn btn-outline-secondary btn-sm">Show More</button>
                <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
            </div>



            <h4 class="mb-4">Category: Education</h4>

            <!-- Cards Grid -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- Blog Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/images/hotstart-bg.jpg') }}" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 1</h5>
                            <!-- <p class="card-text">Short educational insight.</p> -->
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Repeat 5 more cards... -->
                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 2</h5>
                            <p class="card-text">Online learning strategies for 2025.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 3</h5>
                            <p class="card-text">Entrance exams and results tips.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 4</h5>
                            <p class="card-text">New education reforms in India.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 5</h5>
                            <p class="card-text">Top skills for students in 2025.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Education Blog 6</h5>
                            <p class="card-text">Scholarship tips for higher studies.</p>
                            <a href="#" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-4 d-flex justify-content-between">
                <button class="btn btn-outline-secondary btn-sm">Show More</button>
                <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
            </div>


            <!--  BOTTOM AD CONTAINER -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <div class="card border-0 shadow-sm text-center">
                        <a href="https://example.com" target="_blank">
                            <img src="{{ asset('assets/images/hotstart-bg.jpg') }}" class="img-fluid rounded" alt="Advertisement">
                        </a>
                        <div class="card-body p-2">
                            <small class="text-muted">Sponsored Advertisement</small>
                        </div>
                    </div>
                </div>
            </div>            

        </div>
        <!-- 🔹 RIGHT SIDEBAR: Categories & Tags -->
        <div class="col-lg-3 order-2 order-lg-2 mt-4 mt-lg-0">

<!-- Career Categories -->
<div class="card shadow-sm rounded-4 border-0 mb-4">
    <div class="card-header bg-primary text-white rounded-top-4">
        <h5 class="mb-0 responsive-text"><i class="fas fa-briefcase me-2"></i>Career Categories</h5>
    </div>
    <div class="card-body p-0">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action responsive-text">Government Jobs</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Private Sector</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Banking & Finance</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Engineering</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Teaching</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Internships</a>
            <a href="#" class="list-group-item list-group-item-action responsive-text">Walk-In Interviews</a>
        </div>
    </div>
</div>

<!-- Tools Section -->
<div class="card shadow-sm rounded-4 border-0 mb-4">
    <div class="card-header bg-dark text-white rounded-top-4">
        <h5 class="mb-0 responsive-text"><i class="fas fa-tools me-2"></i>Tools</h5>
    </div>
    <div class="card-body">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action responsive-text d-flex align-items-center">
                🖼️ <span class="ms-2">Image Cropper</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action responsive-text d-flex align-items-center">
                📏 <span class="ms-2">Photo Resizer</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action responsive-text d-flex align-items-center">
                📄 <span class="ms-2">Image to PDF</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action responsive-text d-flex align-items-center">
                🧼 <span class="ms-2">Background Remover</span>
            </a>
        </div>
    </div>
</div>
<!-- Tags Sections -->
<div class="card shadow-sm rounded-4 border-0 mb-4">
    <div class="card-header bg-info text-white rounded-top-4">
        <h5 class="mb-0 responsive-text">
            <i class="fas fa-tags me-2"></i>Tags
        </h5>
    </div>
    <div class="card-body">
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="badge bg-primary text-white text-decoration-none tag-badge">Freshers</a>
            <a href="#" class="badge bg-secondary text-white text-decoration-none tag-badge">Experienced</a>
            <a href="#" class="badge bg-warning text-dark text-decoration-none tag-badge">Urgent Hiring</a>
            <a href="#" class="badge bg-success text-white text-decoration-none tag-badge">Remote Jobs</a>
            <a href="#" class="badge bg-dark text-white text-decoration-none tag-badge">Full-Time</a>
            <a href="#" class="badge bg-info text-dark text-decoration-none tag-badge">Part-Time</a>
            <a href="#" class="badge bg-danger text-white text-decoration-none tag-badge">Walk-ins</a>
        </div>
    </div>
</div>



        </div>
    </div>



</div>


@endsection
