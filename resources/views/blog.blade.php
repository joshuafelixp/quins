@extends('layouts.main')
@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <main class="back_all container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-6 fst-italic">Newest Articel and Features</h1>
                <p class="lead my-3">Here will be uploaded about the latest things we do as well as new features that we
                    will always update.</p>
                <p class="lead mb-0"><a href="#post" class="text-white fw-bold">Let's check our post...</a></p>
            </div>
        </div>

        <div id="post" class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Featured</strong>
                        <h3 class="mb-0">Options when placing an order</h3>
                        <div class="mb-1 text-muted">Mar 30</div>
                        <p class="card-text mb-auto">Here we add the options when placing an order feature so you can ...
                        </p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="fitur_1 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Article</strong>
                        <h3 class="mb-0">Awarding</h3>
                        <div class="mb-1 text-muted">Mar 23</div>
                        <p class="mb-auto">We got the award for the most innovative website.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="art_1 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Featured</strong>
                        <h3 class="mb-0">You can ask us directly now</h3>
                        <div class="mb-1 text-muted">Mar 21</div>
                        <p class="card-text mb-auto">There is now a page to ask us questions directly. So you can ask and
                            give us advice frequently.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="fitur_2 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Article</strong>
                        <h3 class="mb-0">Awarding</h3>
                        <div class="mb-1 text-muted">Mar 14</div>
                        <p class="mb-auto">Our team members have received awards for creating great work.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="art_2 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Featured</strong>
                        <h3 class="mb-0">New service</h3>
                        <div class="mb-1 text-muted">Jan 14</div>
                        <p class="card-text mb-auto">We added one more service area that you can order right now. Of course,
                            this one service is also interesting.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="fitur_3 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Article</strong>
                        <h3 class="mb-0">Anniversary</h3>
                        <div class="mb-1 text-muted">Jan 21</div>
                        <p class="mb-auto">It doesn't feel like it's been a year that we have become your partner in
                            carrying out various activities at home.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="art_3 back_post bd-placeholder-img rounded" width="200" height="250">
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">March 30, 2022 by <a href="#">Wahyu</a></p>
                    <p>Here we add the options when placing an order feature so you can order services according to the
                        budget you have.</p>

                    <ul>
                        <li>Add service options based on skill</li>
                        <li>There are different advantages in each option</li>
                        <li>There is an advantage to online discussion on pro options</li>
                    </ul>

                    <p>If there is still something that you think is still lacking from our website, let us know
                        immediately.</p>

                    <a class="btn btn-outline-primary" href="/contact">Contact us</a>
                </article>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">On this page we display what features we have developed and also what
                            awards we have received. All of that will be explained by our creative team well. Happy reading.
                        </p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2022</a></li>
                            <li><a href="#">February 2022</a></li>
                            <li><a href="#">January 2022</a></li>
                            <li><a href="#">December 2021</a></li>
                            <li><a href="#">November 2021</a></li>
                            <li><a href="#">October 2021</a></li>
                            <li><a href="#">September 2021</a></li>
                            <li><a href="#">August 2021</a></li>
                            <li><a href="#">July 2021</a></li>
                            <li><a href="#">June 2021</a></li>
                            <li><a href="#">May 2021</a></li>
                            <li><a href="#">April 2021</a></li>
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="blog-footer">
        <p>This Website built by <a href="/">Quins's Team</a></p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
@endsection
