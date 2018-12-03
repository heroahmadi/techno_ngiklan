<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{url('/home')}}">Beranda</a></li>
                    <li><a href="{{url('/profile')}}">Profil</a></li>
                    <!-- <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                            <li><a href="course-details.html">Course Details</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li class="menu-has-children"><a href="">Level 2 </a>
                                <ul>
                                    <li><a href="#">Item One</a></li>
                                    <li><a href="#">Item Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li><a href="{{ url('search') }}">Pencarian</a></li>
                    @if (auth()->check())
                    <li><a href="">Sign Out</a></li>
                    @else
                    <li><a href="/login">Log In</a></li>
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
