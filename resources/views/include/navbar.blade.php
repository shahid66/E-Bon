<section id="navbarSection">
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 fixed-top">
        <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="content">
              <div class="row">
                <div class="col-md-2">
                    <a class="navbar-brand" href="{{url('/')}}">Logo</a>
                  </div>

                  <div class="col-md-7">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </div>

                  <div class="col-md-3">
                    <ul class="navbar-nav pl-5">
                        <li class="nav-item ">
                          <a class="nav-link" href="{{url('/a')}}"><i class="fa fa-shopping-cart"></i></span><span id="countValue" class="cart-items"></span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="wishList.html"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/b')}}"><i class="fa fa-user" aria-hidden="true"></i></a>
                          </li>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      </ul>
                  </div>

              </div>
              <div class="row">
                  <div class="content">
                    <ul class="navbar-nav margin">
                        <li class="nav-item ">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>

                      </ul>
                  </div>
              </div>
          </div>
        </div>
        </div>
      </nav>


    </div>
</section>
