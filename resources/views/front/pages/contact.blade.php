@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Contact-Us')
@section('content')
<!-- Contact-Us Title -->


<div class="page-title-overlap bg-accent pt-4">
    <div class="container">
        <div class="text-center my-5">

            <h1 class="fw-bolder text-white">Contact Us</h1>
            <p class="lead mb-0 text-white">"We are here for you!"</p>

        </div>
    </div>
</div>

<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
                <h1 class="h4 mb-4">Drop us a line</h1>
                <form action="" method="HEAD" class="needs-validation mb-3" novalidate>
                    @csrf
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label class="form-label" for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-name" placeholder="Your Name" required>
                            <div class="invalid-feedback">Please fill in you name!</div>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" id="cf-email" placeholder="your-email@email.com" required>
                            <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="cf-subject">Subject:</label>
                            <input class="form-control" type="text" id="cf-subject" placeholder="Provide short request title">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required></textarea>
                            <div class="invalid-feedback">Please write a message!</div>
                            <button class="btn btn-primary mt-4" type="submit">Send message</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
