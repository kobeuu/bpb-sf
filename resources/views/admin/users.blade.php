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
          <th>Peran</th>
          <th>Pilihan</th>
        </tr>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td><a href="/users/{{ $user->id }}/edit">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>
              {{ ($user->admin == 1 ) ? 'Admin' : 'Mahasiswa' }}
            </td>
            <td>
              {!! Form::open(['url' => route('users.destroy', $user->id), 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-xs btn-danger">hapus</button>
              {!! Form::close() !!}
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
