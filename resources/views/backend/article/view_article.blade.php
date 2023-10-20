@extends('admin.main-layout')

@section('content-header')
<section class="content">
  <div class="container-fluid">
    <div class="row pt-4">
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Article</h3>
                <div class="card-tools">
                  <a href="{{route('article.add')}}" style="float-right" type="button" class="btn btn-block btn-primary btn-sm mb-3">Tambah</a>
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Konten</th>
                      <th>Kategori</th>
                      <th>Slug</th>
                      <th>Kutipan</th>
                      <th>Image</th>
                      <th>Published at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($allDataArticle as $key => $article)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$article->judul}}</td>
                      <td>{{ substr($article->konten, 0, 50) }}</td>
                      <td>{{$article->category_id}}</td>
                      <td>{{substr($article->slug, 0, 50)}}</td>
                      <td>{{substr($article->kutipan, 0, 50)}}</td>
                      <td><img src="{{asset($article->image)}}" style="width: 180px";></td>
                      <td>{{$article->published_at}}</td>
                      <td>
                        <a href="{{route('article.edit', $article->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('article.delete', $article->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection