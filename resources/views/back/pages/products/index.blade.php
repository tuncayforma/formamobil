@extends('back.layout.master')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Ürünler</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Panel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ürünler</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div style="float: left">
                        @if($category!=null)
                            <h3>{{$category->name}}</h3>
                        @endif
                        <h3 @if(Request::segment(2)=='urunler' and !Request::segment(3)) style="display: inline" @else style="display: none" @endif >Tüm Ürünler</h3>
                    </div>
                    <div class="input-group mb-3" style="float: right; width: 40%;">
                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                        <select class="form-select" id="inputGroupSelect01" onchange="location = this.value;">
                            <option @if($category==null) {{$category->id = 0}} selected @endif  value="{{route('admin.urunler.index')}}">Tüm Ürünler</option>
                            @foreach($categories as $category2)
                            <option id="category-filter" @if($category->id==$category2->id) selected @endif value="{{route('admin.urunler.filter',$category2->id)}}">{{$category2->name}}</a></option>
                            @endforeach
                        </select>
                        <!--<a href="" class="btn btn-outline-success">Filtrele</a>-->
                    </div>
                    <div  style="float:right">

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Kategori</th>
                            <th>Fiyat</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td width="15%"><img src="{{asset('/')}}{{$product->image}}" width="100%" height="20%" alt=""></td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->model}}</td>
                            <td>{{$product->getCategory->name}}</td>
                            <td>{{$product->price}}₺</td>
                            <td><input class="switch-product" product-id="{{$product->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($product->status==1)  checked @endif data-toggle="toggle"></td>
                            <td>
                                <div>
                                    <a href="{{route('admin.urunler.edit',$product->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <form method="post" action="{{route('admin.urunler.destroy',$product->id)}}">
                                        @csrf
                                        @method('DELETE')
                                         <button type="submit" title="sil" class="btn btn-sm btn-danger">
                                             <i class="fa fa-times"></i>
                                         </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('css')
     <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/simple-datatables/style.css">
    @endsection
@section('js')
            <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
            <script src="{{asset('back/')}}/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
            <script>
                // Simple Datatable
                let table2 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table2);
                $(function(){
                    $('.switch-product').change(function() {
                        id = $(this)[0].getAttribute('product-id');
                        statu = $(this).prop('checked');
                        $.get("{{url('admin/product/switch')}}/"+id, {statu:statu}, function (data,status){
                        });
                    })
                })
            </script>
@endsection
