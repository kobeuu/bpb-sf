@extends('admin')

@section('page_title', 'Pendaftaran')

@section('content')
<div class="col-md-12">
  <div class="box box-primary">

    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Waktu Daftar</th>
          <th>Nama Lengkap</th>
          <th>Nomor HP</th>
          <th>Asal SMA</th>
          <th>Asal Daerah</th>
          <th>Universitas</th>
        </tr>
        @foreach ($registrants as $registrant)
          <tr>
            <td>{{ $registrant->created_at }}</td>
            <td><strong>{{ $registrant->name }}</strong></td>
            <td>{{ $registrant->hp}}</td>
            <td>{{ $registrant->sma }}</td>
            <td>{{ $registrant->kota }}</td>
            <td>{{ $registrant->universitas }}</td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <div class="pull-right">
        {!! $registrants->render() !!}
      </div>

    </div>
  </div><!-- /.box -->
  <a href="/registrants/xlsx" class="btn btn-primary">Export to Excel</a>

</div>
@endsection
