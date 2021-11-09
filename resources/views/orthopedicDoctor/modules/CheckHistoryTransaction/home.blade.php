@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md px-4 mt-3">
                <h1>Your History Transaction</h1>
                <table class="table mt-4">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp

                        @foreach($orders as $order)
                        @php
                        $date_and_time = explode(' ', $order->created_at);
                        @endphp

                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $date_and_time[0] }}</td>
                            <td>{{ $date_and_time[1] }}</td>

                            <td><a href="{{ route('checkhistorytransaction.view', [$order->id]) }}"><button class="btn btn-primary">View</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@include('layouts.footer')