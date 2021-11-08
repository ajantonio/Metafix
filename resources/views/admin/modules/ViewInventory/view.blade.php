@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-11 mt-5">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Diameter</th>
                            <th scope="col">Length</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($orthopedic_implant as $orthopedic_implant)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $orthopedic_implant->name }}</td>
                            <td><img src="{{ Storage::url($orthopedic_implant->image) }}" style="width: 100px; height: 100px;"></td>
                            <td>{{ $orthopedic_implant->description }}</td>

                            <td>₱ {{ $orthopedic_implant->price }}.00</td>
                            <td>{{ $orthopedic_implant->quantity }}</td>
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
                            <td>
                                <a href="{{ route('viewinventory.edit', [$orthopedic_implant->id]) }}"><button class="btn btn-success mb-2">Edit</button></a>
                                <form action="{{ route('viewinventory.delete', [$orthopedic_implant->id]) }}" method="POST" onsubmit="return confirmDeleteImplant()">
                                    @csrf
                                    <button class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>


    </div>
</div>
@include('layouts.footer')