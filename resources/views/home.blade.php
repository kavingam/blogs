@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<div class="container my-5">
    <div class="row">
        <!-- 🔸 MAIN BLOG CONTENT -->
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


            <!-- 🔻 BOTTOM AD CONTAINER -->
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
            <!-- Categories -->
            <h5 class="mb-3">Career Categories</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item"><a href="#">Government Jobs</a></li>
                <li class="list-group-item"><a href="#">Private Sector</a></li>
                <li class="list-group-item"><a href="#">Banking & Finance</a></li>
                <li class="list-group-item"><a href="#">Engineering</a></li>
                <li class="list-group-item"><a href="#">Teaching</a></li>
                <li class="list-group-item"><a href="#">Internships</a></li>
                <li class="list-group-item"><a href="#">Walk-In Interviews</a></li>
            </ul>

            <h5 class="mb-3">Tools</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#">🖼️ Image Cropper</a>
                </li>
                <li class="list-group-item">
                    <a href="#">📏 Photo Resizer</a>
                </li>
                <li class="list-group-item">
                    <a href="#">📄 Image to PDF</a>
                </li>
                <li class="list-group-item">
                    <a href="#">🧼 Background Remover</a>
                </li>
            </ul>


            <!-- Tags -->
            <h5 class="mb-3">Tags</h5>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Freshers</a></li>
                <li class="list-group-item"><a href="#">Experienced</a></li>
                <li class="list-group-item"><a href="#">Urgent Hiring</a></li>
                <li class="list-group-item"><a href="#">Remote Jobs</a></li>
                <li class="list-group-item"><a href="#">Full-Time</a></li>
                <li class="list-group-item"><a href="#">Part-Time</a></li>
                <li class="list-group-item"><a href="#">Walk-ins</a></li>
            </ul>
        </div>
    </div>



</div>


@endsection
