@extends('layouts.app')
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg page-tree-bg2">
        <div class="container">
            <h3 class="page-tree-text">
                Заказ оформлен
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <div class="table-responsive">
            <table id="shopping-cart-table" class="shopping-cart-table table table-bordered table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th class="td-name">Название</th>
                    <th class="td-price">Цена (рублей)</th>
                    <th class="td-qty">Количество</th>
                    <th class="td-total">Всего</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="td-images">
                            <a href="{{$product['attributes']['url']}}" class="product-image">
                                <img class="replace-2x" src="{{$product['attributes']['img']}}"
                                     alt="{{$product['name']}}" width="70">
                            </a>
                        </td>
                        <td class="td-name">
                            <h4 class="product-name">
                                <a href="{{$product['attributes']['url']}}">{{$product['name']}}</a>
                            </h4>
                        </td>
                        <td class="td-price">
                            <div class="price">{{$product['price']}}&#8381;</div>
                        </td>
                        <td class="td-qty">
                            {{$product['quantity']}}
                        </td>
                        <td class="td-total">
                            <div class="price">{{$product['price']*$product['quantity']}}&#8381;</div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-total">
                        <div class="price">{{$fullPrice}}&#8381;</div>
                    </td>
                </tr>
                </tbody>
            </table><!-- .shopping-cart-table -->
        </div>
    </div>
    <div class="space-70"></div>
@endsection
