@extends('layouts.main')
@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <div class="font_color back_awal profil_all container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold lh-1 mb-3">Let's Check Out Our Team</h1>
                <p class="lead">We have people who are competent in their fields so you don't need to doubt the
                    results and just enjoy it. Let's order our services now..</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><a class="font_color"
                            href="/product">Order Now</a></button>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="back_satu profil_all rounded-3 container marketing">
            <br><br>
            <div class="row">
                <div class="col-lg-4">
                    <img class="profil_1 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>J.H. Cutler</h2>
                    <p>Since 1884 J.H. Cutler, one of Australia’s and the worlds great tailors, has provided bespoke
                        tailoring and shirt making services to discerning gentlemen throughout Australia, and across the
                        world.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_2 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Ardhi Sulistyo</h2>
                    <p>Yamaha Indonesia technician, Ardhi Sulistyo, made a proud world achievement. Following the 2018 World
                        Technician Grand Prix (WTGP) competition, Ardhi successfully won 2nd place for the Commuter Class
                        category in Iwata Japan (17/10/2018).</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_3 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Desmond Koval</h2>
                    <p>Bali Business Lab: Small & Medium Business Creation & Advisory Service in Indonesia / Charter to
                        create global products & brands originating from Indonesia & SE Asia.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img class="profil_4 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Gordon Ramsay</h2>
                    <p>Gordon James Ramsay OBE is a celebrity chef and restaurateur known for his TV shows "Hell's Kitchen",
                        "The F Word", "Kitchen Nightmares" and "MasterChef".</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_5 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Bambang</h2>
                    <p>It's been almost 4 years accompanying Raffi Ahmad as his personal driver.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_6 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Tom Wright</h2>
                    <p>Wright became design director for the Jumeirah Beach Resort, Dubai, and designed the Burj Al Arab
                        (Tower of the Arabs) at the same time.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img class="profil_7 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Sesa Susanti</h2>
                    <p>he also understands good finishing products for furniture, such as Acrylux, Go Fast A-1000, Aqua Wood
                        Finishing, and many more.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_8 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Darmawan Prasodjo</h2>
                    <p>Darmawan Prasodjo is an Energy Economist who spent more than 15 years in the United States (US)
                        studying and a career as a consultant-researcher at Texas A&M University and Duke University.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="profil_9 profil_all bd-placeholder-img rounded-circle" width="140" height="140">

                    <h2>Yue Minjun</h2>
                    <p>Yue Minjun lives in Beijing and creates works that are world-famous. He was part of the cynical
                        realism movement.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
            </div>
            <br>
        </div>

        <footer class="font_color container">
            <br>
            <p class="float-end"><a href="#"><b>Back to top</a></p>
            <p>&copy; 2021-2022 Company, Inc. &middot; <a href="#"><b>Privacy</a> &middot; <a href="#"><b>Terms</a></p>
        </footer>
    </main>
@endsection
