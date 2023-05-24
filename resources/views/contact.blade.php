@extends('layouts.home')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
            </ol>
        </nav> -->
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <!-- <p class="fs-5 fw-medium text-primary">Contact Us</p> -->
            <h1 class="display-5 mb-5">For any inquiries, please contact us.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp rounded-edge-bg">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Our Office</h6>
                        <span>Kantoorstraat 134, 2800 Mechelen, Belgium</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Call Us</h6>
                        <span>012 345 6789</span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail Us</h6>
                        <span>kantoordelen@muzamelhashimi10.be</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="conversion--checklist portable-margin--short--bottom box-shadow--bofu border-radius--10 margin--tall--top animate--fade animate--fade-up animate--fade-delay--3 animate--fade--active">
                    <p class="hard--top bolder font--19 color--white">
                        You should book a call with us if you ...
                    </p>
                    <ul class="conversion--checklist-ul font--16 all--color--lightest-grey hard--bottom no--bullets">
                        <li class="conversion--checklist--item light">Are a startup and need an office space</li>
                        <li class="conversion--checklist--item light">Need to network and collaborate with professionals.</li>
                        <li class="conversion--checklist--item light">Need to accommodate employees for temporary projects.</li>
                        <li class="conversion--checklist--item light">Unpredictable demands require flexible office arrangements.</li>
                        <li class="conversion--checklist--item light">Need to easily adjust office space for growth or downsizing.</li>
                        <li class="conversion--checklist--item light">Need a presence in a location without resources for dedicated office.</li>
                    </ul>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1684932694884!6m8!1m7!1sTopcerKzmn5az99S9JCVYg!2m2!1d51.02319673711079!2d4.487435435123381!3f68.33945038849956!4f7.454695130944529!5f0.7820865974627469" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection