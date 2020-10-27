<div id="header-container">
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto">
                <a href="{{ route('homepage') }}">
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
                            <a class="nav-link" href="#"> {{__('page.ourmission')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}"> {{__('page.products')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('types.premium', 'premium-quality')}}">{{__('page.premiumquality')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('types.bioproducts', 'bioproducts')}}">{{__('page.bioproducts')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> {{__('page.pricelist')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> {{__('page.contact')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> {{__('page.news')}}</a>
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
