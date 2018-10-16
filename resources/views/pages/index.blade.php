@extends('layouts.app')
@section('content')
    <section id="slider-sec" class="slider-reg">
        <!-- Swiper -->
        <div class="swiper-container swiper-fullwidth">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/img/bg-1.jpg" alt="" class="img-fluid">
                    <div class="swiper-overlay">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-8 slider-text col-md-10 col-12 mr-auto ml-auto">
                                    <h4 class="swiper-title">
                                        Easy customization theme
                                    </h4>
                                    <p>
                                        Bizwrap theme built with modern and easy to use frameworks
                                    </p>
                                    <a href="#!" class="btn btn-white btn-lg">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/img/bg-2.jpg" alt="" class="img-fluid">
                    <div class="swiper-overlay">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-10 slider-text col-md-10 col-12 mr-auto ml-auto">
                                    <h4 class="swiper-title">
                                        Perfect for Small Projects
                                    </h4>
                                    <p>
                                        Bizwrap theme built with modern and easy to use frameworks
                                    </p>
                                    <a href="#!" class="btn btn-white btn-lg">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/img/bg-3.jpg" alt="" class="img-fluid">
                    <div class="swiper-overlay">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-8 slider-text col-md-10 col-12 mr-auto ml-auto">
                                    <h4 class="swiper-title">
                                        Easy customization theme
                                    </h4>
                                    <p>
                                        Bizwrap theme built with modern and easy to use frameworks
                                    </p>
                                    <a href="#!" class="btn btn-white btn-lg">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section><!--main flex slider end-->
    <div class="space-50"></div>
    <div class="container">
        <div class="row intro-row">
            <div class="col-md-12 text-center wow animated fadeInUp">
                <h2>Bizwrap built for Minimal business Projects</h2>
                <h3 class="subtitle">With Clean and Modern Design</h3>
            </div>
            <div class="space-70"></div>
            <div class=" col-md-4">
                <div class="services-box">
                    <i class="ion-laptop"></i>
                    <h4>Responsive design</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                    </p>
                </div>
            </div><!--services box-->
            <div class=" col-md-4">
                <div class="services-box">
                    <i class="ion-ios-color-wand-outline"></i>
                    <h4>Creative ideas</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                    </p>
                </div>
            </div><!--services box-->
            <div class="col-md-4">
                <div class="services-box">
                    <i class="ion-social-twitter-outline"></i>
                    <h4>Bootstrap4</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                    </p>
                </div>
            </div><!--services box-->
        </div><!--row end-->
        <div class="space-30"></div>
        <div class="text-center">
            <a class="modal-video theme-btn-color-outline btn-radius btn" href="https://www.youtube.com/watch?v=cctFcl5EFYk">Watch Video <i class="ion-play"></i></a>
        </div>
    </div><!--intro with services end-->
    <div class="space-70"></div><div class="space-30"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-sec">Recent work</h3>
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->
            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->
            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->


            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-4.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->
            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-5.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->
            <div class="col-md-4 col-sm-6 margin-btm-40">
                <div class="portfolio-sec">
                    <div class="portfolio-thumnail">
                        <a href="portfolio-single.html">
                            <img src="/img/work/work-6.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="portfolio-desc text-center">
                        <h4 class="portfolio-post-title">portfolio item title here</h4>
                        <span class="portfolio-post-cat">Branding</span>
                        <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                    </div>
                </div>
            </div><!--portfolio item -->
        </div><!--row portfolio item-->
    </div><!--recent work container end-->
    <div class="space-70"></div>
    <section id="content-region-1" class="padding-40">
        <div class="container">
            <div class="row">
                <div class="col-md-7 features">
                    <h3>Our services</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. Praesent gravida dignissim felis, id sagittis mauris rutrum non. Nullam pretium id sem ut hendrerit.
                    </p>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-laptop"></i>
                        </div>
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">100% Responsive layout</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                            </p>
                        </div>
                    </div><!--services list-->
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Clean code</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                            </p>
                        </div>
                    </div><!--services list-->
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-compose"></i>
                        </div>
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Easy customization</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                            </p>
                        </div>
                    </div><!--services list-->


                </div>
                <div class="col-md-5">
                    <img src="/img/ipad.png" class="img-fluid" alt="">
                </div>
            </div>

        </div><!--container-->
    </section><!--features end-->
    <section id="content-region-2" class="slider-testimonials ">

        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <i class="ion-quote display-4 margin-btm-40 text-primary"></i>
                    <div class="swiper-container swiper-text">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                                </p>
                                <img src="/img/team/team-1.jpg" alt="" class="img-fluid rounded-circle" width="60">
                                <h6>John Doe - <small>Bizwrap User</small></h6>
                            </div>
                            <div class="swiper-slide">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                                </p>
                                <img src="/img/team/team-2.jpg" alt="" class="img-fluid rounded-circle" width="60">
                                <h6>John Doe - <small>Bizwrap User</small></h6>
                            </div>
                            <div class="swiper-slide">
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis.
                                </p>
                                <img src="/img/team/team-3.jpg" alt="" class="img-fluid rounded-circle" width="60">
                                <h6>John Doe - <small>Bizwrap User</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--testimonials section end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-sec">Latest news</h3>
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-4 margin-btm-20">
                <div class="news-sec">
                    <div class="news-thumnail">
                        <a href="blog-post.html">
                            <img src="/img/blog/blog-1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="news-desc">
                        <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                        <span class="news-post-cat">On 26 may 2014 | sports</span>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
            </div><!--latest news items-->
            <div class="col-md-4 margin-btm-20">
                <div class="news-sec">
                    <div class="news-thumnail">
                        <a href="blog-post.html">
                            <img src="/img/blog/blog-2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="news-desc">
                        <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                        <span class="news-post-cat">On 26 may 2014 | sports</span>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
            </div><!--latest news items-->
            <div class="col-md-4 margin-btm-20">
                <div class="news-sec">
                    <div class="news-thumnail">
                        <a href="blog-post.html">
                            <img src="/img/blog/blog-4.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="news-desc">
                        <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                        <span class="news-post-cat">On 26 may 2014 | sports</span>
                        <p>
                            aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
            </div><!--latest news items-->
        </div><!--row end-->
    </div><!--container recent news end-->
    <div class="space-50"></div>
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h3>Get latest news from us</h3>
                    <p>
                        Subscribe to our newsletter
                    </p>
                </div>
            </div><!--row-->

            <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                    <form method="post" action="#" class="form-subscribe">
                        <input type="text" name="email" placeholder="Email Id..." class="form-control">
                        <button type="submit" name="submit" class="btn theme-btn-color btn-block">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-bg">
        <div class="container text-center">
            <h3>Simple and Minimal Design
                <a href="#" class="btn btn-lg btn-white btn-radius">Purchase Now</a>
            </h3>
        </div>
    </div>
@endsection
