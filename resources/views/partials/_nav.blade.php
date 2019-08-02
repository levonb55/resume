<div class="container nav_container">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('templates') }}">RESUME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cover-letter') }}">COVER LETTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs') }}">JOBS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                </li>
                <li class="nav-item">
                    @if(Auth::check())
                        <a class="nav-link" href="{{ route('logout') }}">LOG OUT</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    @endif
                </li>

            </ul>
        </div>
    </nav>
</div>