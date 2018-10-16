@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                Blog Single
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post-section">
                    <div class="blog-post-img">
                        <img src="/img/blog/blog-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="blog-post-header">
                        <h3><a href="" class="hover-color">standard blog post with image</a></h3>
                    </div>
                    <div class="blog-post-info">
                        <span><a href="#" class="hover-color">by author</a> | on 27 may 2014 | <a href="#" class="hover-color">Sports</a> | <a href="#" class="hover-color">3 comment</a></span>
                    </div>
                    <div class="blog-post-detail">
                        <p>
                            Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.
                        </p>
                        <p>
                            Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.
                        </p>
                    </div>

                </div><!--blog post section end-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-comment-wrapper clearfix">
                            <h3>Comment (3)</h3>
                            <div class="comment-box clearfix">
                                <img src="/img/blog/blog-1.jpg" class="img-fluid" alt="">

                                <span>by user | <a href="#" class="hover-color">Reply</a></span>
                                <p>
                                    aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                                </p>
                            </div><!--comment box-->
                            <div class="comment-box clearfix">
                                <img src="/img/blog/blog-2.jpg" class="img-fluid" alt="">

                                <span>by user | <a href="#" class="hover-color">Reply</a></span>
                                <p>
                                    aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                                </p>
                            </div><!--comment box-->
                            <div class="comment-box clearfix">
                                <img src="/img/blog/blog-3.jpg" class="img-fluid" alt="">

                                <span>by user | <a href="#" class="hover-color">Reply</a></span>
                                <p>
                                    aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                                </p>
                            </div><!--comment box-->
                        </div><!--comment wrapper-->
                        <div class="space-40"></div>
                        <div class="comment-form-wrapper">
                            <h3>leave a comment</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="7" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-lg theme-btn-color">Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--comment form wrapper-->
                    </div>
                </div><!--row-->

                <div class="space-20"></div>
                <div class="clearfix">
                    <div class="float-right">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div><!--blog content-->
            <div class="col-md-4">
                <div class="sidebar-box">
                    <div class="widget-search">
                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="search here...">
                            <i class="ion-search" data-toggle="tooltip" data-placement="top" title="" data-original-title="hit enter to search"></i>
                        </form>
                    </div>
                </div><!--sidebar-box--><hr>
                <div class="sidebar-box">
                    <h4>categories</h4>
                    <ul class="cat-list">
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="10" class="hover-color">Sports</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="6" class="hover-color">Management</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="8" class="hover-color">Music</a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="14" class="hover-color">Product</a></li>
                    </ul>
                </div><hr>
                <div class="sidebar-box">
                    <h4>Text widget</h4>
                    <p>
                        Doloreiur quia commolu ptatemp dolupta oreprerum tibusam eumenis et consent accullignis dentibea autem inisita.
                    </p>
                </div><hr>
                <div class="sidebar-box">
                    <h4>recent post</h4>
                    <div class="recent">
                            <span>
                                <img src="/img/blog/blog-1.jpg" class="img-fluid" alt="">
                            </span>
                        <p><a href="#" class="hover-color">There are many  embarrassing hidden in the middle of text.</a></p>
                        <span class="recent-date">On 27 may in office.</span>
                    </div>
                    <div class="recent">
                            <span>
                                <img src="/img/blog/blog-2.jpg" class="img-fluid" alt="">
                            </span>
                        <p><a href="#" class="hover-color">There are many  embarrassing hidden in the middle of text.</a></p>
                        <span class="recent-date">On 27 may in office.</span>
                    </div>
                    <div class="recent">
                            <span>
                                <img src="/img/blog/blog-3.jpg" class="img-fluid" alt="">
                            </span>
                        <p><a href="#" class="hover-color">There are many  embarrassing hidden in the middle of text.</a></p>
                        <span class="recent-date">On 27 may in office.</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="sidebar-box">
                    <h4>Elsewhere</h4>
                    <ul class=" list-inline social-btn">
                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like On Facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On googleplus"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-pinterest" data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="skype"></i></a></li>
                    </ul>
                </div><hr>
            </div>
        </div>

    </div><!--blog full page content end here-->
    <div class="space-70"></div>
@endsection
@section('script')
    <script src="/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script>
        (function ($, window, document, undefined) {
            'use strict';

            // init cubeportfolio
            $('#js-grid-slider-thumbnail').cubeportfolio({
                layoutMode: 'slider',
                drag: true,
                auto: false,
                autoTimeout: 5000,
                autoPauseOnHover: true,
                showNavigation: false,
                showPagination: false,
                rewindNav: true,
                scrollByPage: true,
                gridAdjustment: 'responsive',
                mediaQueries: [{
                    width: 0,
                    cols: 1
                }],
                gapHorizontal: 0,
                gapVertical: 0,
                caption: '',
                displayType: 'fadeIn',
                displayTypeSpeed: 400,
                plugins: {
                    slider: {
                        pagination: '#js-pagination-slider',
                        paginationClass: 'cbp-pagination-active'
                    }
                }
            });
        })(jQuery, window, document);
    </script>
@endsection
