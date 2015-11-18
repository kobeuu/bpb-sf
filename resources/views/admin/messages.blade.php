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
          <th>Nama</th>
          <th>Nomor Kontak</th>
          <th>ALamat Email</th>
          <th>Subject Pesan</th>
          <th>Pesan</th>
          <th>Action</th>
        </tr>
        @foreach ($messages as $message)
          <tr>
            <td>{{ $message->name }}</td>
            <td>{{ $message->hp}}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->subject }}</td>
            <td>{{ $message->message }}</td>
            <td>
              {!! Form::open(['url' => route('messages.destroy', $message->id), 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div>
  </div><!-- /.box -->
</div>
@endsection
