@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <div class="container px-4 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <i>* IMPORTANT: please take a picture and present this generated quotation to the assigned orthopedic technician. The orthopedic technician
                        checks your <b>Quotation</b> and its <b>reference id</b> to verify the owner of this order.
                    </i>
                </div>
                <div class="col-md-6">
                    <h4 class="mt-5 text-primary">Customer Details</h4>
                    <p><b>Name: </b>{{ $user->name }}</p>
                    <p><b>Contact No.: </b> {{ $user->contact_number }}</p>
                    <p><b>Email: </b> {{ $user->email }}</p>
                    <p><b>Reference id: </b>{{ $orders->reference_id }}</p>

                    <h4 class="mt-5 text-primary">Surgery Details</h4>
                    <p><b>Surgery Date: </b>{{ $orders->surgery_date }}</p>
                    <p><b>Surgery Time.: </b>{{ $orders->surgery_time }}</p>
                    <p><b>Hospital City: </b>{{ $orders->hospital_cities->last()->city }}</p>
                    <p><b>Hospital Address: </b>{{ $orders->hospital_addresses->last()->address }}</p>

                    <h4 class="mt-5 text-primary">Orthopedic Technician Details</h4>
                    <p><b>Orthopedic Technician: </b>{{ $orders->assigned_technician }}</p>
                    <p><b>Contact No.: </b>{{ $orders->technician_contact_number }}</p>

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
                                    @foreach($carts->items as $orthopedic_implant)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td><img src="{{ Storage::url($orthopedic_implant['image']) }}" width="100"></td>
                                        <td>{{ $orthopedic_implant['name'] }}</td>
                                        <td>₱ {{ $orthopedic_implant['price'] }}.00</td>
                                        <td>{{ $orthopedic_implant['quantity'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-footer">
                                <span><b>Total Price:</b> ₱ {{ $carts->totalPrice }}.00</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('layouts.footer')