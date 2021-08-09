@extends('front.layout.master')
@section('content')
<main>
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">{{$config_site->banner_text}}</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="{{route('categoryall')}}" class="btn hero-btn">ÜRÜNLERİ GÖR</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{asset('/')}}{{$config_site->banner_image}}" alt="" class=" heartbeat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New Perfect Style</h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{asset('front/')}}/assets/img/hero/iphone.png" alt="" class=" heartbeat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    -->
        </div>
    </div>
    <br><br>
    <!-- slider Area End-->
    <!-- ? New Product Start -->
    <section class="new-product-area">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle">
                        <h2>Yeni Eklenen Ürünler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products_last_added as $product)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <a href="{{route('single',[$product->getCategory->slug,$product->slug])}}">
                        <div class="product-img">
                            <img src="{{asset('/')}}{{$product->image}}" alt="">
                        </div>
                        <div class="product-caption">
                            <h3>{{$product->model}}</h3>
                            <h6>{{$product->brand}}</h6>
                            <span>{{$product->price}} ₺</span>
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!--  New Product End -->

    <!--? Popular Items Start -->
    <div class="popular-items">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Popüler Ürünler</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products_populer as $product)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <a href="{{route('single',[$product->getCategory->slug,$product->slug])}}">
                        <div class="popular-img">
                            <img src="{{asset('/')}}{{$product->image}}" alt="">
                            <div class="img-cap">
                                <span>Detayları Görüntüle</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3>{{$product->model}}</h3>
                            <h5>{{$product->brand}}</h5>
                            <span> {{$product->price}} ₺</span></a>
                        </div>
                    </div>
            </div>
        @endforeach
        </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn">
                    <a href="{{route('categoryall')}}" class="btn view-btn1">Tüm Ürünleri Gör</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
</main>
<br><br><br>
@endsection
