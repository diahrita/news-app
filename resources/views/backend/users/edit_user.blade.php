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
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('users.update', $editData->id)}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input name="textName" type="name" value="{{$editData->name}}" class="form-control" id="name" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="textEmail" type="email" value="{{$editData->email}}" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="textPassword" type="password" class="form-control" id="password" placeholder="Password">
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