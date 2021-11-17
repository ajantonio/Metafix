@extends('layouts.homenav')

@section('content')
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Our mission is to provide world-class orthopedic services to our customers</h1>
                        <p class="lead fw-normal text-muted mb-4">Metafix was built to provide high-quality orthopedic implants to orthopedic doctors and
                            a user-friendly system that lets orthopedic doctors easily order orthopedic implants from us.
                        </p>
                        <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('about-orthopedic-technicians-one.jpg') }}" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Our foundation</h2>
                    <p class="lead fw-normal text-muted mb-0">We were working as an orthopedic technician in a hospital called Westech.
                        While working, we saw an opportunity to provide a better orthopedic services to orthopedic doctors. We realized
                        that the hospital that we were working will hinder us from making our vision come to reality. Thus, we decided to
                        leave Westech and founded Metafix.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('about-orthopedic-technicians-two.jpg') }}" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Growth &amp; beyond</h2>
                    <p class="lead fw-normal text-muted mb-0">We believe we can do anything with our business as long as we believe in our vision and confident
                        that we can tackle any problems that are in front of us. We are resilient and will consistently provide high-quality orthopedic service
                        to our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team members section-->

</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Metafix 2021</div>
            </div>

        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection