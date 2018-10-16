@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                {{$blog->title}}
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="blog-post-section">
                    <div class="blog-post-img">
                        <img src="{{$blog->photo_url}}" class="img-fluid img-" alt="{{$blog->title}}">
                    </div>
                    <div class="blog-post-header">
                        <h3><a href="" class="hover-color">{{$blog->title}}</a></h3>
                    </div>
                    <div class="blog-post-info">
                        <span>{{$blog->created_at->format('d-m-y')}}</span>
                    </div>
                    <div class="blog-post-detail">
                        @markdown($blog->text)
                    </div>
                </div><!--blog post section end-->
            </div><!--blog content-->
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
