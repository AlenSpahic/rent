

  <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html">Alenov CarRent</a>
              </div>
            </div>
            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="" class="nav-link">Početna</a></li>
                  <li class="text-dark"><a href="services.html" class="nav-link">Servisi</a></li>
                  <li class="text-dark"><a href="cars.html" class="nav-link">Automobili</a></li>
                  <li class="text-dark"><a href="about.html" class="nav-link">O nama</a></li>
                  <li class="text-dark"><a href="blog.html" class="nav-link">Blog</a></li>
                  <li class="text-dark"><a href="contact.html" class="nav-link">Kontakt</a></li>
                  <li>
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                      @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                          @else
                              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                              @endif
                          @endauth
                      </div>
                      @endif
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header
