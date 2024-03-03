@extends('front.layouts.app')

@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'About-Us')
@section('content')
<!-- About-Us Title -->
            <div class="page-title-overlap bg-accent pt-4">
                <div class="container">
                    <div class="text-center my-5">

                        <h1 class="fw-bolder text-white">About Us!</h1>
                        <p class="lead mb-0 text-white">"Discover The Inspiration Behind Every Adventure"</p>
                        <p class="lead mb-0 text-white">For Cyclist,By Cyclist.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header"></div>

                            <div class="card-body">
                                <h2>Welcome to PedalPost</h2>
                                <h6>Your premier destination for all things cycling-related!</h6>
                                <p><h5>Our Story:</h5> PedalPost is the culmination of my journey as a cyclist and a full-stack software developer. As the sole developer behind PedalPost, I set out on a mission to combine my passion for cycling with my expertise in software engineering, culminating in the creation of this platform.</p>
                                <p><h5>Our Mission:</h5> At PedalPost, our mission is simple: to empower cyclists of all levels with the tools, resources, and community they need to thrive. We're dedicated to providing a platform where cyclists can connect, learn, and share their experiences with like-minded enthusiasts.</p>
                                <p><h5>What Sets Us Apart:</h5> PedalPost stands out as a labor of love crafted specifically for cyclists by a fellow enthusiast. Every feature, tool, and resource on PedalPost is designed to enhance the cycling experience and foster a sense of community among riders worldwide.</p>
                                <p><h5>Our Vision:</h5> Our vision for PedalPost is to become the ultimate online destination for cyclists seeking inspiration, knowledge, and camaraderie. We aim to cultivate a vibrant community where cyclists can find everything they need to fuel their passion for the sport.</p>
                                <p><h5>Join Us on the Journey:</h5> Whether you're a seasoned cyclist or just starting out on your biking adventures, PedalPost welcomes you with open arms. Join us as we pedal towards new horizons, explore breathtaking landscapes, and share the joy of cycling with riders from around the globe.</p>

                                <h6>Thank you for being a part of the PedalPost family!</h6>

                                <p>Sincerely,<br>
                                [Wamoni Kiai]<br>
                                Founder & Developer<br>
                                PedalPost</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

