<div class="row">
    <div class="col-md-12">
        <p>Hello, <b>Mr. {{ $orders->assigned_technician }}</b>. You have a new appointment with an orthopedic doctor. You may read the details below to know more
            about your new appointment:
        </p>
    </div>
    <div class="col-md-6">
        <h3>Customer Details</h3>
        <p><b>Name: </b>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</p>
        <p><b>Contact No.: </b> {{ $user->contact_number }}</p>
        <p><b>Email: </b> {{ $user->email }}</p>
        <p><b>Reference id: </b>{{ $orders->reference_id }}</p>

        <br>
        <h3>Surgery Details</h3>
        <p><b>Surgery Date: </b>{{ $orders->surgery_date }}</p>
        <p><b>Surgery Time.: </b>{{ $orders->surgery_time }}</p>
        <p><b>Hospital City: </b>{{ $orders->hospital_cities->last()->city }}</p>
        <p><b>Hospital Address: </b>{{ $orders->hospital_addresses->last()->address }}</p>

        <br>
        <h3>Grade detail</h3>
        <p><b>Orthopedic Implant Grade: </b>{{ $orders->grades->last()->grade_name }}</p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
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
                <td>{{ $orthopedic_implant['name'] }}</td>
                <td>₱{{ $orthopedic_implant['price'] }}.00</td>
                <td>{{ $orthopedic_implant['quantity'] }}</td>
            </tr>
            @endforeach
            <br>
        </tbody>
    </table>
    <br>
    <b>Total Price:</b> ₱{{ $carts->totalPrice }}