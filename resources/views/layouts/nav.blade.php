@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="{{ route('home') }}"><i class="bi bi-box-fill me-2"></i>Master
            Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link @if ($currentRouteName == 'home') active @endif" aria-current="page"
                    href="{{ route('home') }}">Home</a>
                <a class="nav-link @if ($currentRouteName == 'items.index') active @endif"
                    href='{{ route('items.index') }}'>List
                    Barang</a>
                <a class="nav-link @if ($currentRouteName == 'items.create') active @endif"
                    href='{{ route('items.create') }}'>Input
                    Barang</a>
            </div>
        </div>
    </div>
</nav>
