@extends('layouts.homenav')

@section('content')

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><i class="fas fa-tools"></i> {{ config('app.name', 'Laravel') }}</a>
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
                                <a class="dropdown-item" href="/orderorthopedicimplants">Order</a>
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
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Orthopedic Online Ordering System</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Quickly order orthopedic implants and services with our robust, easy-to-use ordering system</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('register') }}">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('orthopedic_technicians.jpg') }}" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">Your first-class orthopedic implants provider</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection text-primary"></i></div>
                                <h2 class="h5">High-Quality Orthopedic Implants</h2>
                                <p class="mb-0">We provide Stainless and Titanium grade that are managed and enhanced by our professional orthopedic technicians</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building text-primary"></i></div>
                                <h2 class="h5">Budget-Friendly Costs</h2>
                                <p class="mb-0">Our orthopedic implants can be bought with reasonable costs and no shipping fee!</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2 text-primary"></i></div>
                                <h2 class="h5">Order With Ease</h2>
                                <p class="mb-0">Our system lets you orthopedic implants with only a few clicks!</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building text-primary"></i></div>
                                <h2 class="h5">Top-Class Orthopedic Technicians</h2>
                                <p class="mb-0">Our trained orthopedic technicins gone through numerous seminar and hands-on training to
                                    provide first-class assistance with your surgery
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Working with Metafix gave me an easier time to order orthopedic implants that I need!
                                I also commend their top-tier orthopedic technicians that helped me finish my orthopedic surgeries with ease"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="{{ asset('doctor.jpg') }}" alt="..." style="height: 50px;" />
                                <div class="fw-bold">
                                    Dr. Edward Mataga
                                    <span class="fw-bold text-primary mx-1">/</span>
                                    Licensed Orthopedic Doctor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Orthopedic Implants</h2>
                            <p class="lead fw-normal text-muted mb-5">These are the orthopedic implants that we offer</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('screw-for-homepage.jpg') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Titanium</div>
                                <span class="badge bg-warning text-black bg-gradient rounded-pill mb-2">Stainless</span>
                                <h5 class="card-title mb-3">Screws</h5>
                                <p class="card-text mb-0">We offer all types of orthopedic screws to accommodate all different types of orthopedic surgeries and
                                    bone injuries
                                </p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('plates-for-homepage.png') }}" style="height: 350px;" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Titanium</div>
                                <span class="badge bg-warning text-black bg-gradient rounded-pill mb-2">Stainless</span>

                                <h5 class="card-title mb-3">Plates</h5>
                                <p class="card-text mb-0">Since our business offers all types of orthopedic screws, we also have all types of orthopedic plates
                                </p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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
</body>
@endsection