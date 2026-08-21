<div class="top-bar">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="left-top">

                    <div class="email-box">
                        <a href="#">
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            youremail@gmail.com
                        </a>
                    </div>

                    <div class="phone-box">
                        <a href="tel:1234567890">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                            +1 234 567 890
                        </a>
                    </div>

                </div>
            </div>


            <div class="col-md-6 col-sm-6">
                <div class="right-top">

                    <div class="social-box">
                        <ul>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-square-rss"></i>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('theme-1/images/logos/logo.png') }}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
                        <li><a class="{{ request()->is('about-us') ? 'active' : '' }}" href="{{ url('/about-us') }}">About us</a></li>
                        <li><a class="{{ request()->is('services') ? 'active' : '' }}" href="{{ url('/services') }}">Our Services</a></li>
                        <li><a class="{{ request()->is('portfolio') ? 'active' : '' }}" href="{{ url('/portfolio') }}">Portfolio</a></li>
                        <li><a class="{{ request()->is('features') ? 'active' : '' }}" href="{{ url('/features') }}">Features</a></li>
                        <li><a class="{{ request()->is('testimonials') ? 'active' : '' }}" href="{{ url('/testimonials') }}">Testimonials</a></li>
                        <li><a class="{{ request()->is('pricing') ? 'active' : '' }}" href="{{ url('/pricing') }}">Pricing</a></li>
						<li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>