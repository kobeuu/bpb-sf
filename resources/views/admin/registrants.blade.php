@extends('admin')

@section('page_title', 'Pendaftaran')

@section('content')
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Semua Pendaftar</h3>
      <div class="box-tools">
        <a href="/registrants/xlsx" class="btn btn-xs btn-primary">Export to Excel</a>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Nama Lengkap</th>
          <th>Nomor HP</th>
          <th>Asal SMA</th>
          <th>Asal Daerah</th>
          <th>Universitas</th>
          <th>Action</th>
        </tr>
        @foreach ($registrants as $registrant)
          <tr>
            <td>{{ $registrant->name }}</td>
            <td>{{ $registrant->hp}}</td>
            <td>{{ $registrant->sma }}</td>
            <td>{{ $registrant->kota }}</td>
            <td>{{ $registrant->universitas }}</td>
            <td>
              {!! Form::open(['url' => route('registrants.destroy', $registrant->id), 'method' => 'delete']) !!}
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
