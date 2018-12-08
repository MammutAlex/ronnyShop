@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                @if(isset($activeCategory))
                    #{{$activeCategory->title}}
                @else
                    Блог Ронни
                @endif
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($articles as $post)
                    <div class="blog-post-section">
                        <div class="blog-post-img">
                            <a href="{{route('blog.show',$post->url)}}">
                                <img src="{{$post->photo_url}}" class="img-fluid" alt="{{$post->title}}">
                            </a>
                        </div>
                        <div class="blog-post-header">
                            <h3>
                                <a href="{{route('blog.show',$post->url)}}" class="hover-color">
                                    {{$post->title}}
                                </a>
                            </h3>
                        </div>
                        <div class="blog-post-info">
                            <span>
                                {{$post->created_at->format('d-m-y')}}
                                <a href="{{route('blog.category',$post->category->url)}}" class="hover-color">
                                    #{{$post->category->title}}
                                </a> |
                                <a href="#" class="hover-color">3 comment</a>
                            </span>
                        </div>
                        <div class="blog-post-detail">
                            {!! str_limit($post->text,200) !!}
                        </div>
                        <div class="blog-post-more text-right">
                            <a href="{{route('blog.show',$post->url)}}" class="btn theme-btn-default btn-lg">
                                Продолжить чтение
                            </a>
                        </div>
                    </div><!--blog post section end-->
                    <div class="space-40"></div>
                @endforeach
                <div class="clearfix">
                    <div class="float-right">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div><!--blog content-->
            <div class="col-md-4">
                <div class="sidebar-box">
                    <div class="widget-search">
                        <form class="search-form" action="{{request()->url()}}" method="get" id="search-form">
                            <input type="text" class="form-control" placeholder="Поиск..." name="search"
                                   value="{{request('search')}}">
                            <i class="ion-search" data-toggle="tooltip" data-placement="top" title=""
                               data-original-title="hit enter to search"
                               onclick="document.getElementById('search-form').submit();"></i>
                        </form>
                    </div>
                </div><!--sidebar-box-->
                <hr>
                <div class="sidebar-box">
                    <h4>Категории</h4>
                    <ul class="cat-list">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{route('blog.category',$category->url)}}"
                                   data-toggle="tooltip"
                                   data-placement="right" title=""
                                   data-original-title="{{$category->articles()->count()}}"
                                   class="hover-color {{isset($activeCategory) && $activeCategory->id === $category->id?'text-primary':''}}">
                                    #{{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            </div>
        </div>
    </div>
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
