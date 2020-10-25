<div id="header-container">
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" width="371" height="143" alt="Luculos foods"></a>
            </div>
        </div>
        <div class="row">
            <nav class="mx-auto navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Our Mission <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('food.index')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('premium-quality-products')}}">Premium Quality</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('bioproduct')}}">Bio Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Price List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>


                        @if (Route::has('login'))

                            @auth
                            <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                            @else
                            <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                            @endif
                            @endif

                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
