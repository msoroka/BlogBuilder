<nav class="navbar sticky-top shadow">
    <div class="container">
        <a class="navbar-brand mr-auto ml-auto" href="{{ url('/') }}">
            {{ $title }}
        </a>
    </div>
    <div class="container navbar-expand-lg justify-content-center">
        <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="nav nav-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    @can('dashboard')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                    @endcan
                </li>
                @if(Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >
                            {{ __('Login') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>