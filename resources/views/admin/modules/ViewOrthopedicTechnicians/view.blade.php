@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orthopedic_technician as $orthopedic_technician)
                        <tr>
                            <th scope="row">{{ $orthopedic_technician->id }}</th>
                            <td><img src="{{ Storage::url($orthopedic_technician->image) }}" style="width: 100px; height: 100px;"></td>
                            <td>{{ $orthopedic_technician->name }}</td>
                            <td>{{ $orthopedic_technician->contact_number }}</td>
                            @if($orthopedic_technician->status == 'On hold')
                            <td class="text-info">{{ $orthopedic_technician->status }}</td>
                            @else
                            <td class="text-success">{{ $orthopedic_technician->status }}</td>
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