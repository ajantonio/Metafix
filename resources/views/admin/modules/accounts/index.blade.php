@include('layouts.header')

@include('layouts.navbaradmin')

<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Orthopedic License Number</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->orthopedic_license_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status->name }}</td>
                            <td>
                                @if($user->status->id == 1)
                                <form action="{{ route('admin.accounts.changeStatus') }}" method="POST">
                                    @csrf
                                    <input type="text" name="status" value="2" hidden/>
                                    <input type="text" name="user" value="{{ $user->id }}" hidden />
                                    <button type="submit" class="btn btn-primary">Accept</button>
                                </form>
                                <form action="{{ route('admin.accounts.changeStatus') }}" method="POST">
                                    @csrf
                                    <input type="text" name="status" value="1" hidden/>
                                    <input type="text" name="user" value="{{ $user->id }}" hidden />
                                    <button type="submit" class="btn btn-danger">Reject</button>
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