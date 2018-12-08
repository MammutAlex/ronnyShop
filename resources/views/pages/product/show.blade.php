@extends('layouts.app')
@section('style')
    <!--cube portfolio-->
    <link href="/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
@endsection
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg page-tree-bg2"
             style="background-image: url({{$product->category->photo_url}})">
        <div class="container">
            <h3 class="page-tree-text">
                {{$product->title}}
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-6 ml-auto">
                <div id="js-grid-slider-thumbnail" class="cbp ">
                    <div class="cbp-item">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{$product->photo_url}}" alt="{{$product->title}}">
                            </div>
                        </div>
                    </div>
                    @foreach($product->images_url as $image)
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{$image}}" alt="{{$product->title}}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="js-pagination-slider">
                    <div class="cbp-pagination-item cbp-pagination-active">
                        <img src="{{$product->photo_url}}" alt="{{$product->title}}">
                    </div>
                    @foreach($product->images_url as $image)
                        <div class="cbp-pagination-item">
                            <img src="{{$image}}" alt="{{$product->title}}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-detail">
                    <h2>{{$product->title}}</h2>
                    <span class="price">{{$product->price}} &#8381;</span>
                    <p>
                        {{$product->short_description}}
                    </p>
                    <product-add-page-component id="{{$product->url}}"></product-add-page-component>
                    <div class="space-30"></div>
                    <ul class="list-unstyled text-left product-extra-info">
                        <li><span>SKU</span> {{$product->sku}}</li>
                        <li><span>Категория</span>
                            <a href="{{route('products.category',$product->category->url)}}">
                                {{$product->category->title}}
                            </a>
                        </li>
                        <li>
                            <span>Теги</span>
                            @foreach($product->tags as $tag)
                                <a href="{{route('products.tag',$tag)}}">
                                    #{{$tag->title}}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="space-50"></div>
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto product-information">
                <!-- Nav tabs -->
                <ul class="item-info-tabs nav" role="tablist">
                    <li class="nav-item">
                        <a class="active nav-link" href="#Description" data-taget="#Description" role="tab"
                           data-toggle="tab">Описание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Information" data-taget="#Information" role="tab"
                           data-toggle="tab">Характеристики</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="#Reviews" data-taget="#Reviews" role="tab"
                           data-toggle="tab">Отзывы <sup>{{$product->reviews()->count()}}</sup></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane show active" id="Description" aria-expanded="true">
                        {!! $product->description !!}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Information" aria-expanded="false">
                        <table class="table-hover table">
                            <tbody>

                            @foreach ($product->characteristics as $characteristics)
                                <tr class="alt">
                                    <th>{{$characteristics->title}}</th>
                                    <td>
                                        <p>{{$characteristics->value}}</p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Reviews" aria-expanded="false">
                        <product-review-component id="{{$product->url}}"></product-review-component>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="space-40"></div>
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
