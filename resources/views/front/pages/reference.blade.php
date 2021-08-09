@extends('front.layout.master')
@section('content')
    <section class="blog_area" style="padding: 20px;">
        <h1 class="text-center">Referanslar</h1>
        <div class="container" style="padding: 50px;">
            <div class="row">
                @foreach($references as $reference)
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('/')}}{{$reference->image}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{$reference->created_at->format('d')}}</h3>
                                    <p>{{$reference->created_at->format('M')}}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="">
                                    <h2>{{$reference->model}}</h2>
                                </a>
                                <p>{{$reference->comment}}</p>
                                <ul class="blog-info-link">
                                    <li><a href=""><i class="fa fa-user"></i>{{$reference->ad.' '.$reference->soyad}}</a></li>
                                    <li><a href=""><i class="fa fa-home"></i>{{$reference->sehir}}</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection
