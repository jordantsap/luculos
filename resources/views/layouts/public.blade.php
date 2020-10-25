@include('partials.head')
<body>

      @include('partials.top-header')


        @include('partials.header')


            <!-- Page Content -->
            <main>
            <div class="container-fluid">
              <div class="row">

                    @yield('content')

                  </div>
                </div>
            </main>


        @stack('modals')

        @livewireScripts


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


                    </div>
                    <!--main container-->

    </body>
</html>
