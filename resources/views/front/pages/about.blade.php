@extends('front.layout.master')
@section('content')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="text-center">Hakkımızda</h3>
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('front/')}}/assets/img/logo/logo2_footer.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7 mt-sm-20">
                        <p>{{$config_site->about_text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
