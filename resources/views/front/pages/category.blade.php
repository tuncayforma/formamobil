@extends('front.layout.master')
@section('content')
    <style>
    </style>
    <section class="popular-items">
        <div class="container">
            <div class="row product-btn justify-content-between mb-40">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="sel sel--black-panther">
                            <select class="form-select" onchange="location = this.value;">
                                <option id="category-filter" @if(Request::segment(4)==null) selected @endif value="{{route('categoryall')}}">Tüm Ürünler</option>
                                @for($id=1;$id<=15000;$id+=2500)
                                        <option id="category-filter" @if(Request::segment(4)==$id) selected @endif value="{{route('urunler.filter',[Request::segment(3),$id])}}">{{$id}}₺-{{$id+2499}}₺</option>
                                @endfor
                                <option @if(Request::segment(4)==500) selected @endif value="{{route('urunler.filter',[Request::segment(3),500])}}">17500₺ üstü</option>
                            </select>
                        </div>
                        <!--<div class="sel sel--superman">
                            <select multiple name="select-superpower" id="select-superpower">
                                <option value="" disabled>Marka</option>
                                <option value="hacker">Power</option>
                                <option value="gamer">Speed</option>
                                <option value="developer">Acrobatics</option>
                                <option value="programmer">Accuracy</option>
                            </select>
                        </div>
                       <div class="sel sel--superman">
                            <select multiple name="select-superpower" id="select-superpower">
                                <option value="" disabled>Dahili Hafıza</option>
                                <option value="hacker">Power</option>
                                <option value="gamer">Speed</option>
                                <option value="developer">Acrobatics</option>
                                <option value="programmer">Accuracy</option>
                            </select>
                        </div> -->
                    </nav>
                    <!--End Nav Button  -->
                </div>
                <!-- Grid and List view -->
                <div class="grid-list-view">
                </div>
                <!-- Select items -->
               <!-- <div class="select-this">
                    <form action="#">
                        <div class="select-itms">
                            <select name="select" class="form-select" id="select1" aria-label="Default select example">
                                <option value="">40 per page</option>
                                <option value="">50 per page</option>
                                <option value="">60 per page</option>
                                <option value="">70 per page</option>
                            </select>
                        </div>
                    </form>
                </div>-->
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
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
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>



@endsection
