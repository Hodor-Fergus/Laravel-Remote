@extends('layouts.home')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('home/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Welcome to
                                    <strong>KANTOOR DELEN</strong>
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">Office Space Sharing Solutions</h1>
                                <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('home/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>KANTOOR DELEN</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to optimize Your
                                    Business</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="home/img/icon/icon-1.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0"> Our office space sharing company has been recognized for its excellence and innovation in the industry.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="home/img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="mb-0"> highly skilled, knowledgeable and professional team ensures seamless experience for all our clients.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="home/img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">We offer competitive and transparent pricing options that cater to different budgets, making office space sharing accessible to businesses of all sizes</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="home/img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">Technical support team is available round the clock to assist our clients with any queries or issues they may have, ensuring uninterrupted operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Features End -->

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Need A Session</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                    <p>Maximize sustainability and minimize energy consumption with your shared office spaces with our expert guidance and unwavering support.</p>
                    <p class="mb-4">Achieve eco-friendly office space sharing with our expertise, ensuring reduced energy consumption and a greener environment. 
                        Need assistance? Our team is here to help!</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->


<!-- Project Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="">
            <p class="fs-5 fw-medium text-primary">Locations</p>
            <h1 class="display-5 mb-5">Awesome Companies are sharing their Spaces</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            @for ($i = 0; $i < count($companies); $i++)
            <div class="project-item mb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @for ($j = 0; $j < count($companies[$i]['images']); $j++)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Can you see that"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        @for ($j = 0; $j < count($companies[$i]['images']); $j++)
                        <div class="carousel-item @if($j == 0) active @endif">
                            <img src="{{ asset('storage/'. $companies[$i]["images"][$j] ) }}" class="d-block w-100" style="height: 177px; object-fit: cover;">
                        </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div>
                    <h4>{{$companies[$i]->company_name}}</h4>
                    <p>{{$companies[$i]->street}}, {{$companies[$i]->city}}, {{$companies[$i]->country}}, {{$companies[$i]->postal_code}}</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<!-- Project End -->
@endsection

@section('scripts')
<script>
    let companies = JSON.parse(`<?php echo $companies ?>`);
    console.log(companies);
    companies.forEach(company => {
        company.images.forEach(imageName => {

        })
    });
</script>
@endsection