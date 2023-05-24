@extends('layouts.home')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Services</li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Office Space Sharing Services that We Offer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icon-security.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Advanced Security Systems</h4>
                                <p class="mb-0">State-of-the-art security systems, including secured access, exterior video surveillance, 
                                    and alarm systems, ensuring the safety of occupants and their belongings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icon-room.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Event Spaces</h4>
                                <p class="mb-0">Our office spaces also feature versatile event spaces that can accommodate B2B events 
                                    such as conferences, workshops, and seminars, providing a professional and well-equipped venue 
                                    for hosting successful business gatherings.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icons-kitchen2.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Ameneties</h4>
                                <p class="mb-0">we provide comprehensive business support services, including free lunch and access 
                                    to shared kitchen facilities for preparing meals and maintaining clean and well-stocked toilet facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Social Collaboration</h4>
                                <p class="mb-0">Foster social interaction and collaboration among professionals 
                                    in our shared office spaces, creating opportunities for networking, 
                                    knowledge sharing, and synergistic partnerships.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icon-9.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">B2B Services</h4>
                                <p class="mb-0">We assist B2B organizations in creating customized office configurations that align 
                                    with their unique requirements, ensuring optimal productivity and collaboration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="home/img/icon/icon-4.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Flexible Workspace</h4>
                                <p class="mb-0">We provide a range of flexible office spaces, from shared 
                                    desks to private offices, tailored to meet the diverse needs of businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="home/img/companytesti1.png" alt="">
                    <p class="mb-4">Your office sharing space has provided our university with a collaborative 
                        environment for research and innovation, empowering our faculty and students to thrive.
                    </p>
                    <h5>THOMAS MORE</h5>
                    <span class="text-primary">Mechelen</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="home/img/companytesti2.png" alt="">
                    <p class="mb-4">The cutting-edge technology and vibrant community at your office sharing 
                        space have fueled our data science company's success, enabling us to excel 
                        in our projects and forge valuable connections.
                    </p>
                    <h5>IT PRO</h5>
                    <span class="text-primary">Antwerp</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="home/img/companytesti4.jpg" alt="">
                    <p class="mb-4">Your office sharing space, with its spacious work areas and 
                        dedicated amenities like locker rooms, perfectly meets our football club's 
                        administrative needs and aligns with our club's values.
                    </p>
                    <h5>ANTWERP FC</h5>
                    <span class="text-primary">Antwerp</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="home/img/companytesti3.png" alt="">
                    <p class="mb-4">Your office sharing space offers top-notch security, modern amenities, 
                        and flexible arrangements, ensuring our energy provider company operates 
                        efficiently and serves our customers with confidence.
                    </p>
                    <h5>ELIA GROUP</h5>
                    <span class="text-primary">Brussels</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection