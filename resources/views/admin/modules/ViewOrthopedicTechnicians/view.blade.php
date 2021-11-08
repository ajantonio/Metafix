@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($orthopedic_technician as $orthopedic_technician)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td><img src="{{ Storage::url($orthopedic_technician->image) }}" style="width: 100px; height: 100px;"></td>
                            <td>{{ $orthopedic_technician->name }}</td>
                            <td>{{ $orthopedic_technician->email }}</td>
                            <td>{{ $orthopedic_technician->contact_number }}</td>
                            @if($orthopedic_technician->status == 'On hold')
                            <td class="text-info">{{ $orthopedic_technician->status }}</td>
                            @else
                            <td class="text-success">{{ $orthopedic_technician->status }}</td>
                            @endif
                            <td>
                                <a href="{{ route('vieworthopedictechnicians.edit', [$orthopedic_technician->id]) }}"><button class="btn btn-success mb-2">Edit</button></a>
                                @if($orthopedic_technician->status == 'On hold')
                                <form action="{{ route('vieworthopedictechnicians.delete', [$orthopedic_technician->id]) }}" method="POST" onsubmit="return confirmDeleteTechnician()">
                                    @csrf
                                    <button class="btn btn-danger">Remove</button>
                                </form>
                                @endif
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