@extends('back.layout.master')
@section('content')
    <div id="main">
   <div class="container">
       @if($errors->any())
           <div class="alert alert-danger">
               @foreach($errors->all() as $error)
                   {{$error}} <br>
               @endforeach
           </div>
       @endif
       <div class="row" style="padding-top: 70px;">
           <div class="col-md-4">
               <div class="card shadow mb-4">
                   <div class="card-header py-3">
                       <h3>Yeni Kategori Oluştur</h3>
                   </div>
                   <div class="card-body mb-4">
                       <form method="POST" action="{{route('admin.category.create')}}">
                           @csrf
                           <div class="form-floating mb-3">
                               <input class="form-control" name="category" id="kategoriAdi" type="text" placeholder="Kategori Adı" data-sb-validations="required" />
                               <label for="kategoriAdi">Kategori Adı</label>
                               <div class="invalid-feedback" data-sb-feedback="kategoriAdi:required">Kategori Adı is required.</div>
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
                       </form>
                   </div>
               </div>
           </div>
           <div class="col-md-7">
               <section class="section">
                   <div class="card">
                       <div class="card-header">
                           <div style="float: left">
                               <h3>Kategoriler</h3>
                           </div>
                       </div>
                       <div class="card-body">
                           <table class="table table-striped" id="table2">
                               <thead>
                               <tr>
                                   <th>Kategori Adı</th>
                                   <th>Ürün Sayısı</th>
                                   <th>Durum</th>
                                   <th>İşlemler</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($categories as $category)
                                   <tr>
                                       <td>{{$category->name}}</td>
                                       <td>{{$category->productCount()}}</td>
                                       <td><input class="switch" category-id="{{$category->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-offstyle="danger" data-onstyle="success" @if($category->status==1)  checked @endif data-toggle="toggle"></td>
                                       <td>
                                           <div>
                                               <form method="post" action="{{route('admin.kategoriler.destroy',$category->id)}}">
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
       </div>
   </div>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/simple-datatables/style.css">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="{{asset('back/')}}/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table2 = document.querySelector('#table2');
        let dataTable = new simpleDatatables.DataTable(table2);
        $(function(){
            $('.switch').change(function() {
                id = $(this)[0].getAttribute('category-id');
                statu = $(this).prop('checked');
                $.get("{{url('admin/category/switch')}}/"+id, {statu:statu}, function (data,status){});
            })
        })
    </script>
@endsection
