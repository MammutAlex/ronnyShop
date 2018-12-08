@extends('layouts.app')
@section('content')
    <section id="content-region-3" class="padding-40 page-tree-bg page-tree-bg2">
        <div class="container">
            <h3 class="page-tree-text">
                Корзина
            </h3>
        </div>
    </section><!--page-tree end here-->
    <div class="space-70"></div>
    <div class="container">
        <product-cart-checkout-component></product-cart-checkout-component>
        <div class="space-40"></div>
        <div class="row">
            <div class="col-sm-3">
                <h4 class="heading-mini">Особисті дані</h4>
            </div>
            <div class="col-sm-9">
                <form role="form" class="checkout-form" id="checkoutForm" method="POST"
                      action="{{route('cart.checkout.store')}}">
                    @method('post')
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('fname') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" name="fname" placeholder="Имя*">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('lname') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" name="lname" placeholder="Фамилия*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <input type="email" class="form-control" name="email" placeholder="Email*">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" name="phone" placeholder="Телефон*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <input type="text" class="form-control" name="address" placeholder="Адресс доставки*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
                                <textarea class="form-control" placeholder="Заметки о заказе" rows="5" name="note">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-lg theme-btn-color btn-block"
                                    onClick="document.getElementById('checkoutForm').submit()">
                                Оформить
                            </button>
                        </div>
                    </div>
                </form><!--end form-->
            </div>

        </div>
    </div>
    <div class="space-70"></div>
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h3>Get latest news from us</h3>
                    <p>
                        Subscribe to our newsletter
                    </p>
                </div>
            </div><!--row-->

            <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                    <form method="post" action="#" class="form-subscribe">
                        <input type="text" name="email" placeholder="Email Id..." class="form-control">
                        <button type="submit" name="submit" class="btn theme-btn-color btn-block">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
