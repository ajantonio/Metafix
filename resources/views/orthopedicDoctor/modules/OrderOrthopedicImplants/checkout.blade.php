@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <div id="layoutSidenav_content">

        <div class="container px-4 mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><b>Products</b></div>
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
                                    @foreach($cart->items as $orthopedic_implant)
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
                                <span><b>Total Price:</b> ₱ {{ $cart->totalPrice }}.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><b>Checkout</b></div>
                        <div class="card-body">

                            <form action="{{ route('orderorthopedicimplant.generate.quotation') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <label class="mb-2"><b>Surgery Date</b></label>
                                        <input type="text" id="surgery-date" name="surgery_date" class="form-control @error('surgery_date') is-invalid @enderror">
                                        @error('surgery_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class=" form-group col-md-6">

                                        <label class="mb-2"><b>Surgery Start Time</b></label>
                                        <input type="text" name="surgery_time" id="surgery-time" name="surgery_time" class="form-control @error('surgery_time') is-invalid @enderror">
                                        @error('surgery_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <label class="mb-2 mt-2"><b>City</b></label>
                                        <select id="city" name="hospital_city" class="form-control @error('hospital_city') is-invalid @enderror">
                                            <option value="">Select</option>
                                            @foreach(App\Models\HospitalCity::all() as $city)
                                            <option value="{{ $city->id }}">{{ $city->city }}</option>
                                            @endforeach
                                            @error('hospital_city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2 mt-2"><b>Hospital Address</b></label>
                                        <select name="hospital_address" id="address" name="hospital_address" class="form-control @error('hospital_address') is-invalid @enderror">
                                            @error('hospital_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Generate Quotation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>

<!-- Dependent dropdown buttons -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="hospital_city"]').on('change', function() {
            var cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: '/orderorthopedicimplants/hospitaladdresses/' + cityId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="hospital_address"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="hospital_address"]').append('<option value="' + key + '">' + value + '</option>');
                        });


                    }
                });
            }
        });
    });
</script>

<!-- Date and Time Picker -->
<script>
    $('#surgery-date').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'Y-m-d', //format date
        value: '', // default date
        weeks: true
    })



    $('#surgery-time').timepicker({
        timeFormat: 'h:mm p',
        minTime: '6:00 am',
        maxTime: '11:00 pm',
        timepicker: true,
        value: '',
        interval: 5
    })
</script>



@include('layouts.footer')