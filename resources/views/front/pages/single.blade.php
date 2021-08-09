@extends('front.layout.master')
@section('content')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="text-center">{{$product->brand}} {{$product->model}}</h3>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <img src="{{asset('/')}}{{$product->image}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-5">
                        <ul style="font-family: 'Josefin Sans';font-weight:500;font-size: 1.3em;padding-top: 20%">
                            <li>Marka : {{$product->brand}}</li>
                            <li>Model : {{$product->model}}</li>
                            {{$product->features}}
                            <li style="color: red">Fiyat : {{$product->price}}₺</li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
