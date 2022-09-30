@extends('layouts.main')

@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>


    <main>
        @foreach ($mitras as $mitra)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $mitra->name }}</h5>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        @endforeach
    </main>
