<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('assets/img/header.png') }}" alt="" title="" style="height: 50px;" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{url('/')}}">Beranda</a></li>
                    @if (auth()->check())
                    <li><a href="{{url('/profile')}}">Profil</a></li>
                    @endif
                    <li><a href="{{ url('search') }}">Pencarian</a></li>
                    @if (auth()->check())
                    <li><a href="/logout">Sign Out</a></li>
                    @else
                    <li><a href="/login">Log In</a></li>
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
