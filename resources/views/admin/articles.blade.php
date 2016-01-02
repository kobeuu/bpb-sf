@extends('admin')

@section('page_title', 'Artikel')

@section('content')
<div class="col-md-12">
  @include('partials.flash')

  @if (count($articles))
  <div class="box box-primary">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Terbit</th>
          <th>Title</th>
          <th>Author</th>
          <th>Tags</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        @foreach ($articles as $article)
          <tr>
            <td>{{ $article->published_at }}</td>
            <td><a href="/articles/{{ $article->id }}/edit"><strong>{{ $article->title }}</strong></a></td>
            <td>{{ $article->user->name }}</td>
            <td>
              @foreach ($article->tags as $tag)
                <li>{{ $tag->name }}</li>
              @endforeach
            </td>
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
      </div>
      {!! $articles->render() !!}
    </div>
  </div><!-- /.box -->
  @else
    <div class="callout callout-info">
      <h4>Tidak ada artikel</h4>
      <p>Anda belum menulis artikel apapun, segera klik tombol tambah artikel dibawah untuk mulai menulis artikel</p>
    </div>
  @endif
  <a href="/articles/create" class="btn btn-primary">Tambah Artikel</a>

</div>
@endsection
