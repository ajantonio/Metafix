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
                <form action="{{ route('vieworthopedictechnicians.update', [$orthopedic_technician->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card mb-6">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-dark">Edit Orthopedic Technicians</h6>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" class="mb-2"><b>Full Name</b></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $orthopedic_technician->name }}">
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
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $orthopedic_technician->email }}">
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
                                    <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ $orthopedic_technician->contact_number }}">
                                    @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-6">
                                    <label for="" class="mb-2"><b>Status</b></label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="" class="text-info">Select</option>
                                        <option value="" class="text-success">On hold</option>
                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-8">
                                    <label for="" class="mb-2"><b>Image</b></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="customFile">
                                    <img src="{{ Storage::url($orthopedic_technician->image) }}" class="mt-3" width="200px">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Update
                            </button>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>
@include('layouts.footer')