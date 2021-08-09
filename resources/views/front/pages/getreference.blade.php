@extends('front.layout.master')
@section('content')
    <section class="contact-section" style="padding: 20px">
        <div class="container">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}} <br>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Referans Ol</h1>

                    <h6 class="">Referans olmanız diğer müşterilerimize yardımcı olmak açısından önemlidir.</h6>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}} <br>
                                Vaktinizi ayırıp referans formunu doldurduğunuz için teşekkür ederiz.
                            </div>
                        @endif

                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('getreferencepost')}}" method="post" id="contactForm"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesajınız'" placeholder="Mesajınız">{{old('message')}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" value="{{old('name')}}" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adınız'" placeholder="Adınız">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" value="{{old('model')}}" name="model" id="model" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Aldığınız ürünün marka ve modeli'" placeholder="Aldığınız ürünün marka ve modeli">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" value="{{old('city')}}" name="city" id="city" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bulunduğunuz Şehir'" placeholder="Bulunduğunuz Şehir">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="image" id="image" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Resim Yükleyiniz">
                                    <label for="">Ürünün resmi:</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Gönder</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{$config_site->address}}</h3>
                            <p>Türkiye</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+{{$config_site->phone_number}}</h3>
                            <p>Pazartesiden Cumaya Sabah:09.00 Akşam:20.00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{$config_site->mail_address}}</h3>
                            <p>Sorularınızı mail yoluyla istediğiniz zaman gönderebilirsiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
