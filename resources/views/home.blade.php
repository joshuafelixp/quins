@extends('layouts.main')

@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <main>
        <div class="back_awal back_all position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-3 mx-auto my-5">
                <h1 class="display-4 fw-normal">Quins</h1>
                <p class="lead fw-normal">Quins (Quick Need Service) is a website for ordering services from trained
                    workers. Our trained workers will come directly to your home. Just order our services online.</p>
                <a class="btn btn-dark" href="/about">Read more about us</a>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="back_satu back_all bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            </div>
            <div class="back_satuu back_all bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Our Job</h2>
                    <p class="lead">Our job here is to serve consumers in the services of trained workers such as
                        tailors, mechanics, barbers, and many more. Our trained workers are experienced and have
                        international level certificates.</p>
                </div>
                <div class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="back_duaa back_all bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Our Goal</h2>
                    <p class="lead">Our goal here is to promote trained workers who are less attractive to the
                        public due to the current pandemic. And also our other goal is to make everything more practical
                        where consumers just wait at their homes.</p>
                </div>
                <div class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div
                class="back_dua back_all bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="back_tiga back_all bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden"></div>
            <div class="back_tigaa back_all bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Our Customers</h2>
                    <p class="lead">Our customers are all of you who need the services of a trained workforce but
                        are worried about the pandemic and don't have time to leave the house. So what are you waiting for
                        ..</p>
                    <a class="btn btn-dark" href="/product">Order our services now</a>
                </div>
                <div class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-3 fst-italic">Need more information about us?</h1>
                <p class="lead my-3">Read more about us to understand what services we provide.</p>
                <p class="lead mb-0"><a href="/about" class="text-white fw-bold">About us...</a></p>
            </div>
        </div>
    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                    viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10" />
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
                <small class="d-block mb-3 text-muted">&copy; 2021–2022</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary" href="#">Random feature</a></li>
                    <li><a class="link-secondary" href="#">Team feature</a></li>
                    <li><a class="link-secondary" href="#">Stuff for workers</a></li>
                    <li><a class="link-secondary" href="#">Another one</a></li>
                    <li><a class="link-secondary" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="#">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Bussiness</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Partnership</a></li>
                    <li><a class="link-secondary" href="#">Education</a></li>
                    <li><a class="link-secondary" href="#">Government</a></li>
                    <li><a class="link-secondary" href="#">Services</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
