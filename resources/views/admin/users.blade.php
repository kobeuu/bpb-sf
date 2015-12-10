@extends('admin')

@section('page_title', 'Pengguna')

@section('content')
<div class="col-md-12">
  <div class="box">
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
            <td>{{ $user->name }}</td>
            <td>{{ $user->admin }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
            </td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
      {!! $users->render() !!}
    </div>
  </div><!-- /.box -->
  <a href="/users/create" class="btn btn-primary">Tambah Pengguna</a>
</div>
@endsection
