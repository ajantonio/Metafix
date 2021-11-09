@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md px-4 mt-3">
                <div class="row">

                    <div class="col-md-6">
                        <h4 class="mt-5 text-primary">Reference ID Detail</h4>
                        <p><b>Reference id: </b>{{ $orders->reference_id }}</p>

                        <h4 class="mt-5 text-primary">Surgery Details</h4>
                        <p><b>Surgery Date: </b>{{ $orders->surgery_date }}</p>
                        <p><b>Surgery Time.: </b>{{ $orders->surgery_time }}</p>
                        <p><b>Hospital City: </b>{{ $orders->hospital_cities->last()->city }}</p>
                        <p><b>Hospital Address: </b>{{ $orders->hospital_addresses->last()->address }}</p>

                        <h4 class="mt-5 text-primary">Orthopedic Technician Details</h4>
                        <p><b>Orthopedic Technician: </b>{{ $orders->assigned_technician }}</p>
                        <p><b>Contact No.: </b>{{ $orders->technician_contact_number }}</p>

                        <h4 class="mt-4 text-primary">Grade detail</h4>
                        <p><b>Orthopedic Implant Grade: </b>{{ $orders->grades->last()->grade_name }}</p>

                    </div>
                    <div class="col-md-6">
                        <div class="card mt-5">
                            <div class="card-header"><b>Ordered Products</b></div>
                            <div class="card-body">
                                <table id="cart" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Implant</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach($carts as $cart)
                                        @foreach($cart->items as $item)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td><img src="{{ Storage::url($item['image']) }}" width="100"></td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>₱ {{ $item['price'] }}.00</td>
                                            <td>{{ $item['quantity'] }}</td>
                                        </tr>
                                        @endforeach
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </main>
    </div>
</div>
@include('layouts.footer')