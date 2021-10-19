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
                <form action="{{ route('addorthopedicimplants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-6">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-dark">Add Orthopedic Implants</h6>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" class="mb-2"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-9">
                                    <label for="" class="mb-2"><b>Screw Type</b></label>
                                    <select name="screw_type" class="form-control">
                                        <option value="">Select</option>
                                        @foreach(App\Models\ScrewType::all() as $screw_type)
                                        <option value="{{ $screw_type->id }}">{{ $screw_type->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="mb-2"><b>Length</b></label>
                                    <input type="text" name="length" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-9">
                                    <label for="" class="mb-2"><b>Plate Type</b></label>
                                    <select name="plate_type" class="form-control">
                                        <option value="">Select</option>
                                        @foreach(App\Models\PlateType::all() as $plate_type)
                                        <option value="{{ $plate_type->id }}">{{ $plate_type->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="mb-2"><b>Diameter</b></label>
                                    <input type="text" name="diameter" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-10">
                                    <label for="" class="mb-2"><b>Image</b></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="customFile">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-6">
                                    <label for="" class="mb-2"><b>Grade</b></label>
                                    <select name="grade" class="form-control @error('grade') is-invalid @enderror">
                                        <option value="">Select</option>
                                        @foreach(App\Models\Grade::all() as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->grade_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="" class="mb-2"><b>Price</b></label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-md-12">
                                    <label for="" class="mb-2"><b>Description</b></label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                                    @error('description')
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