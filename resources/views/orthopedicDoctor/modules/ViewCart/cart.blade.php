@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <div class="container-md px-4 mt-3">
            <table id="cart" class="table table-hover ">


                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cart)
                    @php
                    $i = 1;
                    @endphp
                    @foreach($cart->items as $orthopedic_implant)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td><img src="{{ Storage::url($orthopedic_implant['image']) }}" width="100"></td>
                        <td>{{ $orthopedic_implant['name'] }}</td>
                        <td>PHP {{ $orthopedic_implant['price'] }}.00</td>
                        <td>
                            <input type="text" name="qty">
                            <button class="btn btn-secondary btn-sm"><i class="fas fa-sync"></i>update</button>
                        </td>
                        <td><button class="btn btn-danger">Remove</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="card-footer">
                <button class="btn btn-warning">Continue Shopping</button>
                <span style="margin-left:300px;"><b>Total Price:</b> PHP {{ $cart->totalPrice }}.00</span>
                <button class="btn btn-info float-right">Checkout</button>
            </div>

        </div>
        @else
        <td class="text text-danger">No items in the cart</td>
        @endif
    </div>
</div>

@include('layouts.footer')