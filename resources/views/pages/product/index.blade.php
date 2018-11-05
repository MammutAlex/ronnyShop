@extends('layouts.app')
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg page-tree-bg2 page-transparent">
        <div class="container">
            <h3 class="page-tree-text">
                Shop Default
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>

    <div class="container">
        <div class="row product_grid">
            @foreach ($products as $product)
                <div class="col-md-4 product_item">
                    <div class="product-thumb">
                        <img src="{{$product->photo_url}}" alt="{{$product->title}}"
                             class="img-responsive">
                        <div class="product-thumb-overlay">
                            <p>
                                <a href="#"><i class="ion-bag"></i> В корзину</a>
                            </p>
                        </div>
                    </div><!--end product thumb-->
                    <div class="product-desc">
                        <h3><a href="{{route('products.show',$product->id)}}">{{$product->title}}</a></h3>
                        <p>{{$product->price}} &#8381;</p>
                        <a href="{{route('products.show',$product->id)}}" class="btn theme-btn-default btn-lg">
                            Детальнее
                        </a>
                    </div><!--product desc end-->
                </div><!--product item end-->
            @endforeach
        </div><!--product row end-->
        <div class="space-40"></div>
        <div class="clearfix">
            <div class="float-right">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <div class="space-40"></div>
@endsection
