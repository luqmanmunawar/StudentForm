@extends('frontend.app')

@section('content')


{{-- ==============================
    FEATURES BANNER
============================== --}}

<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="banner">

                    <h2>Features</h2>

                    <ul class="page-title-link">

                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('features') }}">Features</a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>



{{-- ==============================
    FEATURES SECTION
============================== --}}

<div id="features" class="section wb">

    <div class="container">

        <div class="section-title text-center">

            <h3>Features & Overviews</h3>

            <p class="lead">
                Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.
                Aenean sollicitudin,
                <br>
                lorem quis bibendum auctor, nisi elit consequat ipsum,
                nec sagittis sem!
            </p>

        </div><!-- end title -->


        <div class="row">


            {{-- =========================
                LEFT FEATURES
            ========================== --}}

            <div class="col-md-4 col-sm-6 col-xs-12">

                <ul class="features-left">


                    {{-- WordPress --}}
                    <li class="wow fadeInLeft"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s">

                        <i class="fa-brands fa-wordpress"
                           style="font-size:45px;"></i>

                        <div class="fl-inner">

                            <h4>WordPress Installation</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- Windows / Browser --}}
                    <li class="wow fadeInLeft"
                        data-wow-duration="1s"
                        data-wow-delay="0.3s">

                        <i class="fa-brands fa-windows"
                           style="font-size:45px;"></i>

                        <div class="fl-inner">

                            <h4>Browser Compatible</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- Ecommerce --}}
                    <li class="wow fadeInLeft"
                        data-wow-duration="1s"
                        data-wow-delay="0.4s">

                        <i class="fa-solid fa-tag"
                           style="font-size:45px;"></i>

                        <div class="fl-inner">

                            <h4>eCommerce Ready</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- Customize --}}
                    <li class="wow fadeInLeft"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s">

                        <i class="fa-solid fa-file-circle-plus"
                           style="font-size:45px;"></i>

                        <div class="fl-inner">

                            <h4>Easy to Customize</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>

                </ul>

            </div>



            {{-- =========================
                CENTER IMAGE
            ========================== --}}

            <div class="col-md-4 hidden-xs hidden-sm">

                <img
                    src="{{ asset('theme-1/uploads/ipad.png') }}"
                    class="img-center img-responsive"
                    alt="Features"
                >

            </div>



            {{-- =========================
                RIGHT FEATURES
            ========================== --}}

            <div class="col-md-4 col-sm-6 col-xs-12">

                <ul class="features-right">


                    {{-- Colors --}}
                    <li class="wow fadeInRight"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s">

                        <i class="fa-solid fa-palette"
                           style="font-size:45px;"></i>

                        <div class="fr-inner">

                            <h4>Limitless Colors</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- Updates --}}
                    <li class="wow fadeInRight"
                        data-wow-duration="1s"
                        data-wow-delay="0.3s">

                        <i class="fa-solid fa-cloud-arrow-down"
                           style="font-size:45px;"></i>

                        <div class="fr-inner">

                            <h4>Lifetime Update</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- SEO --}}
                    <li class="wow fadeInRight"
                        data-wow-duration="1s"
                        data-wow-delay="0.4s">

                        <i class="fa-solid fa-chart-line"
                           style="font-size:45px;"></i>

                        <div class="fr-inner">

                            <h4>SEO Friendly</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>


                    {{-- Code --}}
                    <li class="wow fadeInRight"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s">

                        <i class="fa-solid fa-code"
                           style="font-size:45px;"></i>

                        <div class="fr-inner">

                            <h4>Simple Clean Code</h4>

                            <p>
                                Lorem Ipsum dolroin gravida nibh
                                vel velit auctor aliquet.
                            </p>

                        </div>

                    </li>

                </ul>

            </div>

        </div><!-- end row -->



        <hr class="hr1">



        {{-- ==============================
            FEATURE CARDS
        =============================== --}}

        <div class="row text-center">


            {{-- Feature Card 1 --}}

            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="service-widget">

                    <div class="post-media wow fadeIn">

                        <a
                            href="{{ asset('theme-1/uploads/features_01.jpg') }}"
                            data-rel="prettyPhoto[gal]"
                            class="hoverbutton global-radius"
                        >
                            <i class="fa-solid fa-link"></i>
                        </a>

                        <img
                            src="{{ asset('theme-1/uploads/features_01.jpg') }}"
                            alt=""
                            class="img-responsive img-rounded"
                        >

                    </div>

                    <h3>Outstanding Landing Pages</h3>

                    <p>
                        Aliquam sagittis ligula et sem lacinia,
                        ut facilisis enim sollicitudin.
                        Proin nisi est, convallis nec purus vitae,
                        iaculis posuere sapien.
                        Cum sociis natoque.
                    </p>

                </div>

            </div>



            {{-- Feature Card 2 --}}

            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="service-widget">

                    <div class="post-media wow fadeIn">

                        <a
                            href="{{ asset('theme-1/uploads/features_02.jpg') }}"
                            data-rel="prettyPhoto[gal]"
                            class="hoverbutton global-radius"
                        >
                            <i class="fa-solid fa-link"></i>
                        </a>

                        <img
                            src="{{ asset('theme-1/uploads/features_02.jpg') }}"
                            alt=""
                            class="img-responsive img-rounded"
                        >

                    </div>

                    <h3>Beautiful SVG Font Icons</h3>

                    <p>
                        Duis at tellus at dui tincidunt scelerisque
                        nec sed felis.
                        Suspendisse id dolor sed leo rutrum euismod.
                        Nullam vestibulum fermentum erat.
                        It nam auctor.
                    </p>

                </div>

            </div>



            {{-- Feature Card 3 --}}

            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="service-widget">

                    <div class="post-media wow fadeIn">

                        <a
                            href="{{ asset('theme-1/uploads/features_03.jpg') }}"
                            data-rel="prettyPhoto[gal]"
                            class="hoverbutton global-radius"
                        >
                            <i class="fa-solid fa-link"></i>
                        </a>

                        <img
                            src="{{ asset('theme-1/uploads/features_03.jpg') }}"
                            alt=""
                            class="img-responsive img-rounded"
                        >

                    </div>

                    <h3>Build a Site In Few Minutes</h3>

                    <p>
                        Etiam materials ut mollis tellus,
                        vel posuere nulla.
                        Etiam sit amet lacus vitae massa sodales
                        aliquam at eget quam.
                        Integer ultricies et magna quis accumsan.
                    </p>

                </div>

            </div>

        </div><!-- end row -->

    </div><!-- end container -->

</div><!-- end features -->



{{-- ==============================
    TESTIMONIALS
============================== --}}

<div
    id="testimonials"
    class="parallax section db parallax-off"
    style="background-image: url('{{ asset('theme-1/uploads/parallax_03.jpg') }}');"
>

    <div class="container">

        <div class="section-title text-center">

            <h3>Testimonials</h3>

            <p class="lead">
                We thanks for all our awesome testimonials!
                There are hundreds of our happy customers!
                <br>
                Let's see what others say about
                GoodWEB Solutions website template!
            </p>

        </div><!-- end title -->


        <div class="row">

            <div class="col-md-12 col-sm-12">

                <div class="testi-carousel owl-carousel owl-theme">


                    {{-- Testimonial 1 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Wonderful Support!
                            </h3>

                            <p class="lead">
                                They have got my project on time with the
                                competition with a sed highly skilled,
                                and experienced & professional team.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_01.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                James Fernando
                                <small>- Manager of Racer</small>
                            </h4>

                        </div>

                    </div>



                    {{-- Testimonial 2 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Awesome Services!
                            </h3>

                            <p class="lead">
                                Explain to you how all this mistaken idea
                                of denouncing pleasure and praising pain
                                was born and I will give you completed.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_02.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                Jacques Philips
                                <small>- Designer</small>
                            </h4>

                        </div>

                    </div>



                    {{-- Testimonial 3 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Great & Talented Team!
                            </h3>

                            <p class="lead">
                                The master-builder of human happines no one
                                rejects, dislikes avoids pleasure itself,
                                because it is very pursue pleasure.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_03.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                Venanda Mercy
                                <small>- Newyork City</small>
                            </h4>

                        </div>

                    </div>



                    {{-- Testimonial 4 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Wonderful Support!
                            </h3>

                            <p class="lead">
                                They have got my project on time with the
                                competition with a sed highly skilled,
                                and experienced & professional team.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_01.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                James Fernando
                                <small>- Manager of Racer</small>
                            </h4>

                        </div>

                    </div>



                    {{-- Testimonial 5 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Awesome Services!
                            </h3>

                            <p class="lead">
                                Explain to you how all this mistaken idea
                                of denouncing pleasure and praising pain
                                was born and I will give you completed.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_02.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                Jacques Philips
                                <small>- Designer</small>
                            </h4>

                        </div>

                    </div>



                    {{-- Testimonial 6 --}}

                    <div class="testimonial clearfix">

                        <div class="desc">

                            <h3>
                                <i class="fa-solid fa-quote-left"></i>
                                Great & Talented Team!
                            </h3>

                            <p class="lead">
                                The master-builder of human happines no one
                                rejects, dislikes avoids pleasure itself,
                                because it is very pursue pleasure.
                            </p>

                        </div>

                        <div class="testi-meta">

                            <img
                                src="{{ asset('theme-1/uploads/testi_03.png') }}"
                                alt=""
                                class="img-responsive alignleft"
                            >

                            <h4>
                                Venanda Mercy
                                <small>- Newyork City</small>
                            </h4>

                        </div>

                    </div>


                </div><!-- end carousel -->

            </div>

        </div><!-- end row -->



        <hr class="hr1">



        {{-- ==============================
            CLIENT LOGOS
        =============================== --}}

        <div class="row logos">


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_01.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_02.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_03.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_04.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_05.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">

                <a href="#">

                    <img
                        src="{{ asset('theme-1/uploads/logo_06.png') }}"
                        alt=""
                        class="img-responsive"
                    >

                </a>

            </div>


        </div><!-- end logos -->

    </div><!-- end container -->

</div><!-- end testimonials -->


@endsection