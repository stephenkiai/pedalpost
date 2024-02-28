@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'About-Us')
@section('content')
<!-- About-Us Title -->


            <!-- Blog Title -->
            <div class="page-title-overlap bg-accent pt-4">
                <div class="container">
                    <div class="text-center my-5">

                        <h1 class="fw-bolder text-white">About Us!</h1>
                        <p class="lead mb-0 text-white">"Discover The Inspiration Behind Every Adventure"</p>
                        <p class="lead mb-0 text-white">For Cyclist,By Cyclist.</p>

                    </div>
                </div>
            </div>

            <section class="bg-light py-3 py-md-5">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
                            <h1 class="h4 mb-4">Read all about us Here...</h1>


                        </div>
                    </div>
                </div>
            </section>

@endsection

