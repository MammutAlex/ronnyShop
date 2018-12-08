@extends('layouts.app')
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg page-tree-bg2 page-transparent"
             style="background-image: url({{isset($activeCategory)?$activeCategory->photo_url:''}})">
        <div class="container">
            <h3 class="page-tree-text">
                @if(isset($activeCategory))
                    {{$activeCategory->title}}
                @elseif(isset($activeTag))
                    #{{$activeTag->title}}
                @else
                    Каталог
                @endif
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row product_grid">
                    @foreach ($products as $product)
                        <div class="col-md-4 product_item">
                            <div class="product-thumb">
                                <img src="{{$product->photo_url}}" alt="{{$product->title}}" class="img-responsive">
                                <product-add-list-component id="{{$product->url}}"></product-add-list-component>
                            </div><!--end product thumb-->
                            <div class="product-desc">
                                <h3><a href="{{route('products.show',$product->url)}}">{{$product->title}}</a></h3>
                                <p>{{$product->price}} &#8381;</p>
                                <a href="{{route('products.show',$product->url)}}" class="btn theme-btn-default btn-lg">
                                    Детальнее
                                </a><!--product desc end-->
                            </div><!--product item end-->
                        </div><!--product row end-->
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
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
                                <a href="{{route('products.category',$category->url)}}"
                                   data-toggle="tooltip"
                                   data-placement="right" title=""
                                   data-original-title="{{$category->products()->count()}}"
                                   class="hover-color {{isset($activeCategory) && $activeCategory->id === $category->id?'text-primary':''}}">
                                    {{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="space-40"></div>
        <div class="clearfix">
            <div class="float-right">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    <div class="space-40"></div>
@endsection
