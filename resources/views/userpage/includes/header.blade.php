<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="{{ route('login') }}"><span class="lnr lnr-envelope"></span> <span class="text">Login</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{url('/home')}}">Beranda</a></li>
                    <li><a href="{{url('/profile')}}">Profil</a></li>
                    <!-- <li><a href="courses.html">Review</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="gallery.html">Gallery</a></li> -->
                    <li class="menu-has-children"><a href="">Review</a>
                        <ul>
                            <li><a href=" ">Ulasan</a></li>
                            <li><a href=" ">Rating</a></li>
                        </ul>
                    </li>
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
                    <li><a href=" ">Kategori</a></li>
                    <li><a href=" ">Sign Out</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
