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
                    <span class="price">{{$product->price}}</span>
                    <p>
                        {{$product->short_description}}
                    </p>
                    <form class="cart">
                        <div class="add-to-cart-table">
                            <div class="quantity">
                                <input type="number" step="1" min="1" name="quantity" value="1" title="Qty"
                                       class="input-text qty text">
                            </div>
                            <button type="button" class="button">В корзину</button>
                        </div>
                    </form>
                    <div class="space-30"></div>
                    <ul class="list-unstyled text-left product-extra-info">
                        <li><span>SKU</span> 73253-12</li>
                        <li><span>Tag</span> <a href="#">Men's Wear</a></li>
                        <li><span>Category</span> <a href="#">Watches</a></li>
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
                           data-toggle="tab">Отзивы <sup>3</sup></a>
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
