@include('layouts.header')

@include('layouts.navbardoctor')
        <div id="layoutSidenav">
@include('layouts.sidebardoctor')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-md px-4 mt-3">
                        <div class="row">
                            @foreach($orthopedic_implants as $orthopedic_implant)
                                <div class="col-xs-12 col-sm-6 col-md-4 mt-3">
                                    <div class="card">
                                        @if(count($orthopedic_implant->screw_types) >= 1)
                                            @foreach($orthopedic_implant->screw_types as $screw_types)
                                                <img class="card-img-top" style="height: 200px; width: 200px; display: block; margin: auto auto;" src="{{ asset($screw_types->image) }}">
                                                <div class="card-body">
                                                <h5 class="card-title ml-1">{{ $screw_types->type }}</h5>
                                            @endforeach
                                        @else
                                            <!-- <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXEQgq-M5Rrj2BSTG_cLVjJvGhj7WFdz-Rpg0xbmPEBv0scK5eSA8893clqeNDFReqWhM&usqp=CAU" width="100px"> -->
                                        @endif

                                        @if(count($orthopedic_implant->plate_types) >= 1)
                                            @foreach($orthopedic_implant->plate_types as $plate_types)

                                                <img class="card-img-top" style="height: 200px; width: 200px; display: block; margin: auto auto;" src="{{ asset($plate_types->image) }}">
                                                <div class="card-body">
                                                <h5 class="card-title">{{ $plate_types->type }}</h5>
                                            @endforeach
                                        @else
                                            <!-- <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXEQgq-M5Rrj2BSTG_cLVjJvGhj7WFdz-Rpg0xbmPEBv0scK5eSA8893clqeNDFReqWhM&usqp=CAU" width="100px"> -->
                                        @endif

                                            <p class="card-text">{{ Str::limit($orthopedic_implant->description, 125) }}</p>
                                            <a href="#" class="btn btn-primary">Add to Cart <i class="fas fa-cart-plus"></i></a>
                                            <a href="#" class="btn btn-success">View <i class="fas fa-eye"></i></i></a>
                                            <p class="mt-2"><b>Price:</b> PHP {{ $orthopedic_implant->price }}.00 </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="#" class="btn btn-primary mt-4">Proceed <i class="fas fa-arrow-alt-circle-right"></i></a>
                        <br><br>
                    </div>
                </div>
                </main>
                
            </div>
        </div>
@include('layouts.footer')