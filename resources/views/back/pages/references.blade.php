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
                        <h3>Referanslar</h3>
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
                            <h3 >Referanslar</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table2">
                            <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Ad</th>
                                <th>Şehir</th>
                                <th>Ürün</th>
                                <th>Mesaj</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($references as $reference)
                                <tr>
                                    <td width="15%"><img src="{{asset('/')}}{{$reference->image}}" width="100%" height="20%" alt=""></td>
                                    <td>{{$reference->ad}}</td>
                                    <td>{{$reference->sehir}}</td>
                                    <td>{{$reference->model}}</td>
                                    <td width="40%">{{$reference->comment}}</td>
                                    <td><input class="switch" category-id="{{$reference->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($reference->status==1)  checked @endif data-toggle="toggle"></td>
                                    <td>
                                        <div>
                                            <form method="post" action="{{route('admin.referanslar.destroy',$reference->id)}}">
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
            <script src="{{asset('back/')}}/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
            <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
            <script>
                // Simple Datatable
                let table2 = document.querySelector('#table2');
                let dataTable = new simpleDatatables.DataTable(table2);
                $(function(){
                    $('.switch').change(function() {
                        id = $(this)[0].getAttribute('category-id');
                        statu = $(this).prop('checked');
                        $.get("{{url('admin/reference/switch')}}/"+id, {statu:statu}, function (data,status){});
                    })
                })
            </script>

@endsection
