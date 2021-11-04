@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">



            <div class="col-lg-4 mt-5">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <form action="{{ route('addorthopedictechnicians.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-6">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-dark">Add Orthopedic Technicians</h6>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" class="mb-2"><b>Full Name</b></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-12">
                                    <label for="" class="mb-2"><b>Email</b></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-6">
                                    <label for="" class="mb-2"><b>Contact No.</b></label>
                                    <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror">
                                    @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-8">
                                    <label for="" class="mb-2"><b>Image</b></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="customFile">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- <div class="form-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Choose File</label>
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-primary mt-3">
                                Submit
                            </button>


                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@include('layouts.footer')