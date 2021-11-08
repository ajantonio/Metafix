@include('layouts.header')
<style>

</style>
@include('layouts.navbardoctor')
<div id="layoutSidenav">
    @include('layouts.sidebardoctor')
    <div id="layoutSidenav_content">
        <main>
            <div class="container px-4 mt-5">
                <div class="d-flex justify-content-center">
                    <p class="display-1">Welcome to <b class="text-monospace"> Metafix</b></p>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <p>You may find the list of services available on the left side of this page. If you can't see the list of services please press the <b>burger icon</b>
                        located on the top right side of this page. We hope you will have an easier time using our system. Good luck with your surgery, <b>Dr.
                            {{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}!</b>
                    </p>
                </div>


            </div>
        </main>

    </div>
</div>
@include('layouts.footer')