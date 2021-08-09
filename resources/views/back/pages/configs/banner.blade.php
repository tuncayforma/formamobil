@extends('back.layout.master')
@section('content')
    <div id="main">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>
        @endif
        <h3 style="padding-top: 50px;">Banner Güncelle</h3>
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{route('admin.config.banner.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <img src="{{asset('/')}}{{$config_site->banner_image}}" width="100%" height="100%" alt="">
                            <input class="form-control" id="urunResmi" name="image" type="file" placeholder="Ürün Resmi" data-sb-validations="required" />
                            <label for="urunResmi">Ürün Resmi</label>
                            <div class="invalid-feedback" data-sb-feedback="urunResmi:required">Ürün Resmi is required.</div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="bannertext" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required">{{$config_site->banner_text}}</textarea>
                        <label for="message">Banner Yazısı</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <p>To activate this form, sign up at</p>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Güncelle</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div><script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
