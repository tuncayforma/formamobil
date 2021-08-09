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
        <h3 style="padding-top: 50px;">Ürün Ekle</h3>
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{route('admin.urunler.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" name="category" id="urunKategorisi" aria-label="Ürün Kategorisi">
                                @foreach($categories as $category)
                                    <option @if(old('category')==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <label for="urunKategorisi">Ürün Kategorisi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="marka" name="brand" type="text" placeholder="Marka" value="{{old('brand')}}" data-sb-validations="required" />
                            <label for="marka">Marka</label>
                            <div class="invalid-feedback" data-sb-feedback="marka:required">Marka is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="model" name="model" type="text" placeholder="Model" value="{{old('model')}}"  data-sb-validations="required" />
                            <label for="model">Model</label>
                            <div class="invalid-feedback" data-sb-feedback="model:required">Model is required.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="urunResmi" name="image" type="file" placeholder="Ürün Resmi" data-sb-validations="required" />
                            <label for="urunResmi">Ürün Resmi</label>
                            <div class="invalid-feedback" data-sb-feedback="urunResmi:required">Ürün Resmi is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="fiyat" name="price" type="number" value="{{old('price')}}" placeholder="Fiyat" data-sb-validations="required" />
                            <label for="fiyat">Fiyat</label>
                            <div class="invalid-feedback" data-sb-feedback="fiyat:required">Fiyat is required.</div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="ozellikler" name="features" type="text" placeholder="Özellikler" style="height: 18rem;" data-sb-validations="required">{{old('features')}}</textarea>
                        <label for="ozellikler">Özellikler</label>
                        <div class="invalid-feedback" data-sb-feedback="ozellikler:required">Özellikler is required.</div>
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
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Ekle</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div><script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
