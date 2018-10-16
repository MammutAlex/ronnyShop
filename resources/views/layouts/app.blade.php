<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--plugins-->
    <link href="/css/plugins/plugins.css" rel="stylesheet">

    @yield('style')

    <!--Custom css-->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
{{--<div id="preloader">--}}
{{--<div id="preloader-inner"></div>--}}
{{--</div><!--/preloader-->--}}
<header class="header header-sticky header-transparent header-light">
    <div class="top-bar navbar">
        <div class="container">
            <ul class="navbar-nav nav flex-row mr-auto">
                <li class="nav-item"><a href="#!"><i class="ion-ios-telephone mr-2"></i> mail@domain.com</a></li>
            </ul>
            <ul class="navbar-nav flex-row nav ml-auto">
                <li class="nav-item"><a href="signup.html" class="nav-link">Create an account?</a></li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link"><i class="ion-android-lock mr-2"></i> Login</a></li>

                <li class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Eng.</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-sm">
                        <li><a href="#" class="dropdown-item">ENGLISH</a></li>
                        <li><a href="#" class="dropdown-item">FRANCE</a></li>
                        <li><a href="#" class="dropdown-item">GERMANY</a></li>
                        <li><a href="#" class="dropdown-item">JAPANESE</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--container end-->
    </div>
    <nav class="navbar navbar-expand-lg yamm">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="/img/logo-dark.png" class="img-fluid logo-dark" alt="">
                <img src="/img/logo-white.png" class="img-fluid logo-light" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="active dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html" class="dropdown-item">Home - Default</a></li>
                            <li><a href="home-master.html" class="dropdown-item">Home - Master Slider</a></li>
                            <li><a href="home-animation.html" class="dropdown-item">Home - Animations</a></li>
                            <li><a href="home-carousel.html" class="dropdown-item">Home Carousel</a></li>
                            <li><a href="home-boxed.html" class="dropdown-item">Home boxed</a></li>
                            <li><a href="home-onepage.html" class="dropdown-item">One Page</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#" class="dropdown-item">Multi level menu </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item"> menu level 2</a></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#" class="dropdown-item">menu level 2 </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item"> menu level 3</a></li>
                                            <li><a href="#" class="dropdown-item"> menu level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Portfolio</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html" class="dropdown-item">Portfolio 3 col</a></li>
                            <li><a href="portfolio-masonry.html" class="dropdown-item">Portfolio Masonry</a></li>
                            <li><a href="portfolio-full.html" class="dropdown-item">Portfolio Full width</a></li>
                            <li><a href="portfolio-full-boxed.html" class="dropdown-item">Full width boxed</a></li>
                            <li><a href="portfolio-single.html" class="dropdown-item">Portfolio Single</a></li>
                        </ul>
                    </li>
                    <li class=" dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog-full.html">Blog Full width</a></li>
                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <!--mega menu-->
                    <li class="dropdown dropdown-fw nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">More <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="heading">Pages 1</h3>
                                            <ul class="mega-vertical-nav list-unstyled">
                                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                                <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                                <li><a class="dropdown-item" href="services.html">Services</a></li>
                                                <li><a class="dropdown-item" href="our-team.html">Our Team</a></li>
                                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                                                <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-3">
                                            <h3 class="heading">Pages 2 </h3>
                                            <ul class="mega-vertical-nav list-unstyled">
                                                <li><a class="dropdown-item" href="page-fullwidth.html">Full Width</a>
                                                </li>
                                                <li><a class="dropdown-item" href="page-leftbar.html">Left Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="page-rightbar.html">Right Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="faqs.html">Faqs</a></li>
                                                <li><a class="dropdown-item" href="page-error.html">Error 404</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3 class="heading">Features</h3>
                                            <ul class="mega-vertical-nav list-unstyled">
                                                <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                                                <li><a class="dropdown-item" href="shortcodes.html">Shortcodes</a></li>
                                                <li><a class="dropdown-item" href="pricing.html">Pricing Tables</a></li>
                                                <li><a class="dropdown-item" href="footer-option.html">Footer option</a>
                                                </li>
                                                <li><a class="dropdown-item" href="gallery-lightbox.html">Lightbox-gallery</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2">
                                            <img src="/img/ipad.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=" dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Shop</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="shop-default.html">Shop 3 columns</a></li>
                            <li><a href="shop-sidebar.html" class="dropdown-item">Shop Sidebar</a></li>
                            <li><a class="dropdown-item" href="product-detail.html">Product Detail</a></li>
                            <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                            <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-search ml-4 dropdown">
                <a class="icon-search" href="#!" data-toggle="dropdown">
                    <i class="ion-ios-search-strong"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <form class="form-inline">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="button" class="form-search-button">
                            <i class="ion-ios-search-strong"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav><!--nav end-->
</header>
@yield('content')
<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-btm-20">
                <div class="footer-col">
                    <h3>Bizwrap</h3>
                    <p>
                        aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>
                </div>
                <div class="space-20"></div>
                <div class="footer-col">
                    <h3>contact info</h3>
                    <p><i class="ion-home"></i> pearl tower,3rd floor,jaipur,302012</p>
                    <p><i class="ion-iphone"></i> +91 9887568614</p>
                    <p><i class="ion-email"></i> mail@domain.com</p>
                </div>
                <div class="space-20"></div>
                <div class="footer-col">
                    <h3>Follow us</h3>
                    <ul class=" list-inline social-btn">
                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Like On Facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Follow On twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Follow On googleplus"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-pinterest"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-skype" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="skype"></i></a></li>
                    </ul>
                </div><!--footer social col-->
            </div><!--col-4 end-->
            <div class="col-md-3 margin-btm-20">
                <div class="footer-col">
                    <h3>Latest post</h3>
                    <ul class="post-list list-unstyled">
                        <li><a href="#" class="hover-color">Blog post with image</a></li>
                        <li><a href="#" class="hover-color">lorem ipsum dollor sit amet</a></li>
                        <li><a href="#" class="hover-color">Blog post with audio</a></li>
                        <li><a href="#" class="hover-color">lorem ipsum dollor sit amet</a></li>
                        <li><a href="#" class="hover-color">Blog post with quote</a></li>
                    </ul>
                </div>
            </div><!--latest post col end-->
            <div class="col-md-5">
                <div class="footer-col">
                    <h3>Get in touch</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name...">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email...">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject...">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Massage..." rows="7"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-lg btn-white">Send massege</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--get in touch col end-->
        </div><!--footer main row end-->
        <div class="space-70"></div>
        <div class="row">
            <div class="col-md-12 text-center footer-bottom">
                <a href="index.html"> <img src="/img/logo-white.png" alt=""></a>
                <div class="space-20"></div>
                <span>&copy;2017. All right reserved. Design by design_mylife</span>
            </div>
        </div><!--footer copyright row end-->
    </div><!--container-->
</div><!--footer main end-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
<!--back to top end-->
<!-- jQuery plugins. -->
<script src="/js/plugins/plugins.js"></script>
<script src="/js/app.js"></script>
@yield('script')
</body>
</html>
