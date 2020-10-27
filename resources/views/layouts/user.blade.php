<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') . " | " . __('Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                      <div class="container">
                          <a class="navbar-brand" href="{{ url('/') }}">
                              {{ config('app.name', 'Laravel') }}
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                              <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- Left Side Of Navbar -->
                              <ul class="navbar-nav mr-auto">

                              </ul>

                              <!-- Right Side Of Navbar -->
                              <ul class="navbar-nav ml-auto">
                                  <!-- Authentication Links -->
                                  @guest
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                      @if (Route::has('register'))
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                          </li>
                                      @endif
                                  @else
                                      <li class="nav-item dropdown">
                                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              {{ Auth::user()->name }}
                                          </a>

                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                  @csrf
                                              </form>
                                          </div>
                                      </li>
                                  @endguest
                              </ul>
                          </div>
                      </div>
                  </nav>

                </div>
            </header>

            <!-- Page Content -->
            <main class="bg-white">
              @yield('content')
                {{-- <div class="container">
                  <div class="row">
                  </div>
                </div> --}}

            </main>
        </div>


                <footer class="w-90" id="main-footer">

                  <div>
                    <div id="footer-widgets" class="clearfix">
                      <div class="footer-widget last">
                        <div id="text-3" class="fwidget et_pb_widget widget_text">
                          <div class="textwidget"></div>
                        </div> <!-- end .fwidget -->
                      </div> <!-- end .footer-widget -->
                    </div> <!-- #footer-widgets -->
                  </div> <!-- .container -->


                  <div id="footer-bottom">
                    <div class="container clearfix">
                      <ul class="et-social-icons">

                        <li class="et-social-icon et-social-facebook">
                          <a href="https://www.facebook.com/luculosfood/" target="_blank" class="icon">
                            <span> <img src="{{asset('svg/facebook-app-logo.svg')}}" width="28px" height="28px" alt="Luculos Facebook link"> </span>
                          </a>
                        </li>
                        <li class="et-social-icon et-social-rss">
                          <a href="https://luculos.com/feed/" class="icon">
                            <span>
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-rss-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm1.5 2.5a1 1 0 0 0 0 2 8 8 0 0 1 8 8 1 1 0 1 0 2 0c0-5.523-4.477-10-10-10zm0 4a1 1 0 0 0 0 2 4 4 0 0 1 4 4 1 1 0 1 0 2 0 6 6 0 0 0-6-6zm.5 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                              </svg>
                            </span>
                          </a>
                        </li>

                      </ul>
                      <p id="footer-info">Designed by <a href="https://www.facebook.com/CB.GrX" title="C.B. Graphix &amp; Design">C.B. Graphix &amp; Design</a> | Powered by <a href="http://www.luculos.com">Luculos.com</a></p>
                    </div> <!-- .container -->
                  </div>
                </footer>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
