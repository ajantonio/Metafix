@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">

    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md px-4 mt-3">

                <div class="card">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <section class="gallery-wrap">
                                <div class="img-big-wrap">
                                    <div>
                                        <img src="{{ Storage::url($orthopedic_implant->image) }}" style="height: 400px; width: 300px; display: block; margin: auto auto;">
                                    </div>
                                </div>

                            </section>
                        </aside>



                        <aside class="col-sm-7">
                            <section class=" card-body p-5">
                                <h3 class="title mt-3">{{ $orthopedic_implant->name }}</h3>
                                <p>{{ $orthopedic_implant->description }}</p>


                                <hr>
                                <h6> <b>Length Size:</b> {{ $orthopedic_implant->length }}</h6>
                                <h6> <b>Diameter Size:</b> {{ $orthopedic_implant->diameter }}</h6>
                                <p><b>Price</b>: PHP {{ $orthopedic_implant->price }}.00</p>


                                <a href="{{ route('orderorthopedicimplant.add.screw.cart', [$orthopedic_implant->id]) }}">
                                    <button type="submit" class="btn btn-primary mt-5">
                                        Add to cart
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </a>
                            </section>
                        </aside>

                    </div>



                </div>
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
        </main>
    </div>

    @include('layouts.footer')