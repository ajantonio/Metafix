@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <div class="container-md px-4 mt-3">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            @endif
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            <table id="cart" class="table table-hover ">


                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Implant</th>
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
                        <td>₱ {{ $orthopedic_implant['price'] }}.00</td>
                        <td>
                            <form action="{{ route('viewcart.update', $orthopedic_implant['id']) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $orthopedic_implant['quantity'] }}">
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-sync"></i>update</button>
                            </form>
                        </td>
                        <form action="{{ route('viewcart.remove', $orthopedic_implant['id']) }}" method="POST">
                            @csrf
                            <td><button class="btn btn-danger">Remove</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="card-footer">
                <span><b>Total Price:</b> ₱ {{ $cart->totalPrice }}.00</span>
                <a href="{{ route('orderorthopedicimplant.cart.checkout', $cart->totalPrice) }}"><button class="btn btn-info float-right">Checkout</button></a>
            </div>

        </div>
        @else
        <td class="text text-danger">No items in the cart</td>
        @endif
    </div>
</div>

@include('layouts.footer')