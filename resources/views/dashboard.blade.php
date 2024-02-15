<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <body>
        <div class="py-12 bg-white">


            <!-- Services Start -->
            <div class="container-fluid py-5 d-fl">
                <div class="container">
                    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                        <h1 class="display-4">Medical Specialities</h1>
                    </div>
                    <div class="g-5 w-100">
                        <div class="w-full row gap-4 items-center justify-center">
                            @foreach($specialities as $speciality)
                            <div class="service-item col-md-3 bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon mb-4">
                                    <i class="fa fa-2x fa-user-md text-white"></i>
                                </div>
                                <h4 class="mb-3">{{ $speciality->specialityName }}</h4>
                                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                                <a class="btn btn-lg btn-primary rounded-pill" href="">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services End -->

            <!-- Team Start -->
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                        <h1 class="display-4">Qualified Healthcare Professionals</h1>
                    </div>
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="img/team-1.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3>Doctor Name</h3>
                                        <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                        <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="/doctorDetails">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="img/team-2.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3>Doctor Name</h3>
                                        <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                        <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="/doctorDetails">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="img/team-3.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3>Doctor Name</h3>
                                        <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                        <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="/doctorDetails">See More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
        </div>
        <!-- Appointment Start -->
        <div class="container-fluid bg-primary my-5 py-5">
            <div class="container py-5">
                <div class="row gx-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h1 class="display-4">Make An Appointment For Your Family</h1>
                        </div>
                        <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                        <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Find Doctor</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white text-center rounded p-5">
                            <h1 class="mb-4">Book An Appointment</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Choose Department</option>
                                            <option value="1">Department 1</option>
                                            <option value="2">Department 2</option>
                                            <option value="3">Department 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Select Doctor</option>
                                            <option value="1">Doctor 1</option>
                                            <option value="2">Doctor 2</option>
                                            <option value="3">Doctor 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
</x-app-layout>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>