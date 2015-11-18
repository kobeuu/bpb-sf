@extends('admin')

@section('page_title', 'Daftar Artikel')

@section('content')
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Semua Artikel</h3>
      <div class="box-tools">
        <div class="input-group" style="width: 150px;">
          <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Penulis</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        @foreach ($articles as $article)
          <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->user_id}}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->excerpt }}</td>
            <td><span class="label label-success">Pending</span></td>
            <td>
              <a href="/articles/{{ $article->id }}/edit"><span class="btn btn-xs btn-primary">Edit</span></a>
              {!! Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
      {!! $articles->render() !!}
    </div>
  </div><!-- /.box -->
</div>
@endsection
