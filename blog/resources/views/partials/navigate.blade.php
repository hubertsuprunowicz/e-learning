

<nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
    <div class="container nav-container">
        <a class="navbar-brand navbar-logo" href="{{ url('/') }}"><span class="navbar-logo-1">Learn</span><span class="navbar-logo-2">More</span></a>
        <button class="navbar-toggler navbar-auth-line" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto text-uppercase letters-spacing">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <span class="separator-auth">|</span>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('lessons') }}">courses<span class="badge badge-danger ml-2">9</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                            @if(Auth::user()->name === 'admin')
                                <a class="dropdown-item" href="{{ route('admin.panel') }}">admin panel</a>
                            @endif

                            <a class="dropdown-item" href="{{ route("user.profile", Auth::user()->name) }}">profile</a>
                            <a class="dropdown-item" href="{{ route('message.messageList') }}">messages<span class="badge badge-danger ml-2">2</span></a>
                            <a class="dropdown-item btn-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <b>{{ __('Logout') }}</b>

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
</nav>