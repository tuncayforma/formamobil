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
        <h3 style="padding-top: 50px;">İletişim Bilgileri Güncelle</h3>
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{route('admin.config.contact.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="address" name="address" type="text" placeholder="Adres" value="{{$config_site->address}}" data-sb-validations="required" />
                            <label for="marka">Adres</label>
                            <div class="invalid-feedback" data-sb-feedback="marka:required">Marka is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="number" name="number" type="text" placeholder="Telefon Numarası" value="+{{$config_site->phone_number}}"  data-sb-validations="required" />
                            <label for="model">Telefon Numarası</label>
                            <div class="invalid-feedback" data-sb-feedback="model:required">Model is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="whatsapp_number" name="whatsapp_number" type="text" value="+{{$config_site->phone_number_whatsapp}}" placeholder="Fiyat" data-sb-validations="required" />
                            <label for="fiyat">Whatsapp iletişim numarası</label>
                            <div class="invalid-feedback" data-sb-feedback="fiyat:required">Fiyat is required.</div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="facebook" name="facebook" type="text" placeholder="Facebook link" value="{{$config_site->facebook_url}}" data-sb-validations="required" />
                        <label for="marka">Facebook Link</label>
                        <div class="invalid-feedback" data-sb-feedback="marka:required">Marka is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="twitter" name="twitter" type="text" placeholder="Twitter Link" value="{{$config_site->twitter_url}}"  data-sb-validations="required" />
                        <label for="model">Twitter Link</label>
                        <div class="invalid-feedback" data-sb-feedback="model:required">Model is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="mail" name="mail" type="text" value="{{$config_site->mail_address}}" placeholder="Mail Adresi" data-sb-validations="required" />
                        <label for="fiyat">Mail Adresi</label>
                        <div class="invalid-feedback" data-sb-feedback="fiyat:required">Fiyat is required.</div>
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
