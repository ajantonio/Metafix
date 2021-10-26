@include('layouts.header')

@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <div id="layoutSidenav_content">

        <div class="container px-4 mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Checkout</b></div>
                    <div class="card-body">

                        <form action="#" method="post" id="payment-form">@csrf
                            <div class="row">
                                <div class="form-group col-md-6">

                                    <label class="mb-2"><b>Surgery Date</b></label>
                                    <input type="text" name="surgery_date" id="date-of-reservation" class="form-control" required="">
                                </div>
                                <div class="form-group col-md-6">

                                    <label class="mb-2"><b>Surgery Start Time</b></label>
                                    <input type="text" name="surgery_time" id="time-of-reservation" class="form-control" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">

                                    <label class="mb-2 mt-2"><b>Hospital City</b></label>
                                    <input type="text" name="city" id="city" class="form-control" required="">
                                </div>
                                <div class="form-group col-md-12">

                                    <label class="mb-2 mt-2"><b>Hospital Address</b></label>
                                    <input type="text" name="state" id="state" class="form-control" required="">
                                </div>
                            </div>

                            <div class="">
                                <input type="hidden" name="amount" value="{{$amount}}">


                                <button class="btn btn-primary mt-3">Submit Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script>
        $('#date-of-reservation').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y-m-d', //format date
            value: '', // default date
            weeks: true
        })



        $('#time-of-reservation').timepicker({
            timeFormat: 'h:mm p',
            minTime: '6:00 am',
            maxTime: '11:00 pm',
            timepicker: true,
            value: ''
        })
    </script>

    @include('layouts.footer')