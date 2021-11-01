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
                        <div class="card border border-dark">
                            <a href=" orderorthopedicimplants/implant/{{ $orthopedic_implant->id }} ">
                                <img class="card-img-top" style="height: 200px; width: 200px; display: block; margin: auto auto;" src="{{ Storage::url($orthopedic_implant->image) }}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title ml-1">{{ $orthopedic_implant->name }} </h5>
                                <h6> <b>Length Size:</b> {{ $orthopedic_implant->length }}</h6>
                                <h6> <b>Diameter Size:</b> {{ $orthopedic_implant->diameter }}</h6>
                                <p class="mt-2"><b>Price:</b> ₱ {{ $orthopedic_implant->price }}.00 </p>
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