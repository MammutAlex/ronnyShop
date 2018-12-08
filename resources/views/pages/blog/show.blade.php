@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                {{$post->title}}
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post-section">
                    <div class="blog-post-img">
                        <img src="{{$post->photo_url}}" class="img-fluid img-" alt="{{$post->title}}">
                    </div>
                    <div class="blog-post-header">
                        <h3><a href="" class="hover-color">{{$post->title}}</a></h3>
                    </div>
                    <div class="blog-post-info">
                        <span>
                            {{$post->created_at->format('d-m-y')}} |
                            <a href="{{route('blog.category',$post->category->url)}}" class="hover-color">
                                #{{$post->category->title}}
                            </a>
                        </span>
                    </div>
                    <div class="blog-post-detail">
                        {!! $post->text !!}
                    </div>
                </div><!--blog post section end-->
            </div><!--blog content-->
            <div class="col-md-4">
                <div class="sidebar-box">
                    <h4>Похожие посты</h4>
                    @foreach($categoryPosts as $article)
                        <div class="recent">
                            <span>
                                <img src="{{$article->photo_url}}" class="img-fluid" alt="{{$article->title}}">
                            </span>
                            <p>
                                <a href="{{route('blog.show',$post->url)}}" class="hover-color">{{$article->title}}</a>
                            </p>
                            <span class="recent-date">{{$article->created_at->format('d-m-y')}}</span>
                        </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <hr>
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
