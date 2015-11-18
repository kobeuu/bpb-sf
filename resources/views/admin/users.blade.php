@extends('admin')

@section('page_title', 'Pendaftaran')

@section('content')
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar Semua Pendaftar</h3>
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
          <th>Nama</th>
          <th>Alamat Email</th>
          <th>Action</th>
        </tr>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
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
