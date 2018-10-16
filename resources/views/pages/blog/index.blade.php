@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                Блог Ронни
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="blog-masonary-wrapper">
        <div class="container">
            <div class="row mas-boxes" id="mas-boxes">
                @foreach ($articles as $post)
                    <div class="mas-boxes-inner col-md-4 col-sm-6">
                        <div class="news-sec wow animated bounceIn" data-wow-delay="0.3s">
                            <div class="news-thumnail">
                                <a href="{{route('blog.show',$post->id)}}">
                                    <img src="{{$post->photo_url}}" class="img-fluid" alt="{{$post->title}}">
                                </a>
                            </div>
                            <div class="news-desc">
                                <h3 class="blog-post-title">
                                    <a href="{{route('blog.show',$post->id)}}" class="hover-color">
                                        {{$post->title}}
                                    </a>
                                </h3>
                                <span class="news-post-cat">{{$post->created_at->format('d-m-y')}}</span>
                                <p>
                                    @markdown(str_limit($post->text,100))
                                </p>
                                <a href="{{route('blog.show',$post->id)}}" class="mas-link">
                                    Продолжить чтение <i class="ion-ios-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">

            <div class="clearfix">
                <div class="float-right">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div><!--masonary wrapper-->
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
