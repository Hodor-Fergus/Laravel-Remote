@extends('layouts.home')
@section('content')
<!-- Page Header Start -->
<div class="head2 container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">ABOUT US</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">About</li>
            </ol>
        </nav> -->
    </div>
</div>
<div class="hero-section">
      <div class="container">
         <div class="caption">OUR STORY</div>
         <div class="title">More happy people, working in better spaces, the planet smiles</div>
      </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl about mb-5" style="margin-top: 6rem;">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/l506kf-zz_I?start=40" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="fs-5 fw-medium text-center text-primary">KANTOOR DELEN</p>
                    <h1 class="display-6 mb-4">WHO WE ARE & WHAT WE DO</h1>
                    <p class="mb-4">As Peter Drucker once said, <i>'What gets measured, gets managed.'</i> 
                        It is crucial for businesses to recognize the environmental impact of their energy usage and take proactive measures to minimize it.
                    </p>
                    <p class="mb-4">Our business was founded with a clear purpose: to address the pressing issue of energy consumption in companies. 
                        We recognized that when each company has its own separate office space with just a few employees, it not only increases costs 
                        but also contributes to excessive energy usage. In response, we created a solution that brings multiple companies together 
                        into a shared office space. By consolidating their operations, we not only help them save costs but also significantly 
                        reduce energy consumption.<br>
                        Our <b>MISSION</b> is driven by the belief that by bringing companies together in a single space, 
                        we can create a more sustainable and environmentally friendly world. <br>

                        Our <b>VISION</b> is driven by the belief that when multiple companies share a single office space, we not only optimize costs 
                        but also reduce energy consumption, making a positive impact on the environment. By providing companies with greater choice and flexibility, 
                        we enable happier workers while promoting a sustainable planet.
                    </p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('home/img/icon/icon-5.png') }}" alt="">
                            <h5 class="mb-3">Managed Services</h5>
                            <span>We take care of your security, support, maintenance, and technology infrastructure, 
                                allowing you to focus on your core business activities. With our proactive approach and reliable solutions, 
                                we ensure optimized performance, increased efficiency, and peace of mind for your business.</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('home/img/icon/icon-2.png') }}" alt="">
                            <h5 class="mb-3">Dedicated Experts</h5>
                            <span>our dedicated experts are ready to assist businesses in achieving success. 
                                With their strategic guidance and tailored solutions, we empower businesses to overcome 
                                challenges and thrive in today's competitive landscape."</span>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Kantoor Delen Office Spaces</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Our team of expert professionals is ready to assist you.</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('home/img/team-1.jpg') }}" alt="">
                    <h5>Fergus Assam</h5>
                    <span class="text-primary">Founder & CEO</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('home/img/team-2.jpg') }}" alt="">
                    <h5>Muzammel Hashimi</h5>
                    <span class="text-primary">Senior Manager of Supply Ops</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('home/img/team-3.jpg') }}" alt="">
                    <h5>Collin Van Der Vorst</h5>
                    <span class="text-primary">Senior Customer Success Manager</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('home/img/team-4.jpg') }}" alt="">
                    <h5>Robert Jordan</h5>
                    <span class="text-primary">VP, Hybrid Workplace Experience & Chief People Officer</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection