@extends('admin.main-layout')

@section('content-header')
<section class="content">
  <div class="container-fluid">
    <div class="row pt-4">
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('category.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input name="nama" type="name" class="form-control" id="name" placeholder="Nama Kategori">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </section>
    
@endsection