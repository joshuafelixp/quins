@extends('layouts.main')

@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <section class="back_header py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col">
                </div>
                <div class="col-8 px-5 ms-3">
                    <h1 class="fw-light d-flex justify-content-center">Our Product</h1>
                    <p class="lead text-muted d-flex justify-content-center">Here are the services we provide. You can order
                        it directly according to what service you need. We have many attractive offers, so check out our
                        products.</p>
                </div>
                <div class="col">
                </div>
            </div>
            <br><br>
        </div>
    </section>

    <main>
        <div class="back_content album py-5">
            <div class="container">
                <div class="row align-items-start">
                    @foreach ($services as $service)
                        <div class="col-4 mb-4">
                            <div class="card shadow-sm" style="height: 400px">
                                <img src="{{ $service->image }}" width="100%" height="225">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-primary">{{ $service->service_name }}</strong>
                                    <p class="card-text">{{ $service->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a
                                                    href="{{ $service->slug }}">Order
                                                    now</a></button>
                                        </div>
                                        <small class="text-muted">Wait us on your home</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Join us!</p>
            <p class="mb-0"><a href="/">Visit the homepage</a> or read our <a href="/">getting
                    started guide</a>.</p>
        </div>
    </footer>
@endsection
