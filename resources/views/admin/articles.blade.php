@extends('admin')

@section('page_title', 'Daftar Artikel')

@section('content')
<div class="col-md-12">
  @include('partials.flash')

  <div class="box box-primary">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Tags</th>
          <th>Tanggal Terbit</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        @foreach ($articles as $article)
          <tr>
            <td><a href="/articles/{{ $article->id }}/edit"><strong>{{ $article->title }}</strong></a></td>
            <td>{{ $article->user->name }}</td>
            <td>
              @foreach ($article->tags as $tag)
                <li>{{ $tag->name }}</li>
              @endforeach
            </td>
            <td>{{ $article->published_at }}</td>
            <td><span class="label label-success">Published</span></td>
            <td>
              {!! Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <div class="pull-right">
        <a href="/articles/create" class="btn btn-primary">Tambah Artikel</a>
      </div>
      {!! $articles->render() !!}
    </div>
  </div><!-- /.box -->
</div>
@endsection
