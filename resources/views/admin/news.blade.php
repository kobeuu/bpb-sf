@extends('admin')

@section('page_title', 'Berita')

@section('content')
<div class="col-md-12">
  @include('partials.flash')

  @if (count($news))
  <div class="box box-primary">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Title</th>
          <th>Tanggal Terbit</th>
          <th>Action</th>
        </tr>
        @foreach ($news as $new)
          <tr>
            <td><a href="/news/{{ $new->id }}/edit"><strong>{{ $new->title }}</strong></a></td>
            <td>{{ $new->published_at }}</td>
            <td>
              {!! Form::open(['url' => route('news.destroy', $new->id), 'method' => 'delete']) !!}
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
      {!! $news->render() !!}
    </div>
  </div><!-- /.box -->
  @else
    <div class="callout callout-info">
      <h4>No News!</h4>
      <p>Anda belum menulis berita apapun</p>
    </div>
  @endif
  <a href="/news/create" class="btn btn-primary">Tambah Berita</a>

</div>
@endsection
