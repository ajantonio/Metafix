<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-white">Orthopedic Service</div>
                <a class="nav-link" href="{{ route('orderorthopedicimplant.home') }}">
                    <div class="sb-nav-link-icon"></div>
                    Order Orthopedic Implants
                </a>

                <div class="sb-sidenav-menu-heading text-white">Transaction</div>
                <a class="nav-link" href="{{ route('checkhistorytransaction.home') }}">
                    <div class="sb-nav-link-icon"></div>
                    Check History Transactions
                </a>
                <div class="sb-sidenav-menu-heading text-white">Inventory</div>
                <a class="nav-link" href="{{ route('viewcart.home') }}">
                    <div class="sb-nav-link-icon"></div>
                    View Cart ({{ session()->has('cart') ? session()->get('cart')->totalQty:'0' }})
                </a>
            </div>
        </div>

    </nav>
</div>