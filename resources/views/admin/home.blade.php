@include('layouts.header')

@include('layouts.navbaradmin')
<div id="layoutSidenav">
    @include('layouts.sidebaradmin')
    <div id="layoutSidenav_content">
        <main>
            <div class="container px-4">
                <h1 class="mt-4"></h1>
                <div class="d-flex justify-content-center">
                    <p class="display-2">Welcome, <b class="text-monospace"> Administrator!</b></p>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <p>You may find different administrative functionalities on the left side of this page. If you can't see these functionalities please press the <b>burger icon</b>
                        located on the top right side of this page.
                    </p>
                </div>
            </div>
        </main>

    </div>
</div>
@include('layouts.footer')