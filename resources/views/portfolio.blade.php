@extends('layouts.main')
@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <main>
        <div class="container py-4">
            <div class="back_awal back_all p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Still in doubt about our abilities?</h1>
                    <p class="col-md-8 fs-4">Come check out our team's portfolio. Portfolio from our team will make you more
                        confident to order our services</p>
                    <button class="btn btn-info btn-lg" type="button"><a class="font_color" href="/product">Go to
                            order?</a></button>
                </div>
            </div>

            <div class="container marketing">
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">CANVAS <span class="text-muted">by J.H. Cutler</span></h2>
                        <p class="lead">In 2014 the CANVAS by J.H. Cutler brand was conceived as a complimentary
                            offering to our traditional pure bespoke craftsmanship. Hand cut and fitted, using a pattern he
                            drafts from a client’s individual measurements, CANVAS offers an entrée into the world of
                            bespoke clothing with a contemporary eye for detail and cut.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="back_satu back_all bd-placeholder-img rounded" width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Burj Al Arab <span class="text-muted">by Tom Wright</span></h2>
                        <p class="lead">Who doesn't know the Burj Al Arab (Arabic Tower), the iconic beachfront
                            building that rises high, like a sailboat? Since it was completed in 1999, the hotel building
                            located in the Arabian Gulf has become an icon of Dubai, United Arab Emirates. It all started in
                            the hands of a British architect named Tom Wright.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="back_dua back_all bd-placeholder-img rounded" width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Execution <span class="text-muted">by Yue Minjun</span></h2>
                        <p class="lead">Execution is one of the works of a painter from China named Yue Minjun. He
                            is a famous painter and belongs to the category of Avant Garde painters from China. Yue Minjun's
                            work is quite unique, because they have very happy expressions, like people playing in the park.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="back_tiga back_all bd-placeholder-img rounded" width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">
            </div>

            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
    </main>
@endsection
