<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<nav class="d-flex flex-column flex-shrink-0 p-3 bg-white" style="width: 280px; height: 100vh; position: fixed;">
    <ul class="nav nav-pills flex-column mb-auto">
        <a class="nav-item nav-link" href="/" wire:navigate> Dashboard </a>
        <a class="nav-item nav-link" id="order-nav" href="/order" wire:navigate > Order </a>
        <a class="nav-item nav-link" id="transaction-nav" href="/transaction" wire:navigate> Transaction </a>
        <a class="nav-item nav-link" id="products-nav" href="/products" wire:navigate> Products </a>
        <a class="nav-item nav-link" id="customers-nav" href="/customers" wire:navigate> Customers </a>
    </ul>
    
</nav>