<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/unnamed.png" class="navbar-brand-img">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/brand/unnamed.png">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/unnamed.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/books')}}">
                        <i class="ni ni-book-bookmark text-blue"></i> {{ __('Books') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/magazines')}}">
                        <i class="ni ni-books text-blue"></i> {{ __('Magazines') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/newspapers')}}">
                        <i class="ni ni-tag text-orange"></i> {{ __('Newspapers') }}
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/issues')}}">
                        <i class="ni ni-air-baloon text-info"></i> {{ __('Issued') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/returns')}}">
                        <i class="ni ni-bold-up text-info"></i> {{ __('Returned') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/notreturns')}}">
                        <i class="ni ni-bold-down text-info"></i> {{ __('Not Returned') }}
                    </a>



                </li>
            </ul>
            <!-- Divider -->

                </li>
            </ul>
        </div>
    </div>
</nav>
