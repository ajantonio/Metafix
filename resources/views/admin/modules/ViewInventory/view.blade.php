@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-11 mt-5">
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Price</th>
                            <th scope="col">Diameter</th>
                            <th scope="col">Length</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orthopedic_implant as $orthopedic_implant)
                        <tr>
                            <th scope="row">{{ $orthopedic_implant->id }}</th>
                            <td>{{ $orthopedic_implant->name }}</td>
                            <td><img src="{{ Storage::url($orthopedic_implant->image) }}" style="width: 100px; height: 100px;"></td>
                            <td>{{ $orthopedic_implant->description }}</td>
                            @foreach($orthopedic_implant->grades as $grade)
                            <td>{{ $grade->grade_name }}</td>
                            @endforeach
                            <td>PHP {{ $orthopedic_implant->price }}.00</td>
                            @if($orthopedic_implant->diameter == '')
                            <td class="text-danger"> N/A </td>
                            @else
                            <td>{{ $orthopedic_implant->diameter }}</td>
                            @endif
                            @if($orthopedic_implant->length == '')
                            <td class="text-danger"> N/A </td>
                            @else
                            <td>{{ $orthopedic_implant->length }}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>


    </div>
</div>
@include('layouts.footer')