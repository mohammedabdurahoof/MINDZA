<!--====== HEADER PART START ======-->
    
<header id="header-part">
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-envelope"></i><a href="mailto:kpmhaleem528@gmail.com">kpmhaleem528@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+918943485194">8943485194</a></li>
                        </ul>
                    </div> <!-- header contact -->
                </div>
                <div class="col-md-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="social d-flex">
                            <span class="follow-us">Follow Us :</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                            </ul>
                        </div> <!-- social -->
                        <div class="login-register">
                            <ul>
                                <li><a href="register.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </div> <!-- header right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->
    
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index-4.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a class="active" href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('about')) ? 'active' : '' }}" href="/about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="policy.html">Privacy Policy</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('courses')) ? 'active' : '' }}" href="/courses">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="courses-single.html">Course Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('events')) ? 'active' : '' }}" href="/events">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.html">Events List 1</a></li>
                                        <li><a href="events-2.html">Events List 2</a></li>
                                        <li><a href="events-single.html">Event Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('teachers*')) ? 'active' : '' }}" href="/teachers">Teachers</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="teachers.html">teachers</a></li>
                                        <li><a href="teachers-2.html">teachers 2</a></li>
                                        <li><a href="teachers-single.html">teacher Single</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="contact-2.html">Contact Us 2</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="right-icon text-right">
                            <ul>
                                <li><a href="javascript:void(0)" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> <!-- right icon --> --}}
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</header>

<!--====== HEADER PART ENDS ======-->