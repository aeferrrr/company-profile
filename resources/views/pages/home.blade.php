@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <section id="home" class="hero-section d-flex align-items-center text-white">
        <div class="container">
            <h1 class="fw-bold display-5">
                One-Stop Industrial Construction Partner
            </h1>
            <p class="lead mt-3 ">
                Since 2011 we has played a pivotal role in increasing productivity of the industries to promote the rapid growth of the national economy.
            </p>
            <a href="#footer" class="btn btn-warning btn-lg mt-4">
                Consult Your Project
            </a>
        </div>
    </section>
    @include('pages.about')
    @include('pages.services')
    @include('pages.projects')
@endsection
