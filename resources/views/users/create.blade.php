@extends('admin')

@section('page_title', 'Perbarui Profil')

@section('content')
<div class="col-md-12">

  @include('partials.flash')

  <!-- Display Validation Errors -->
  @include('errors.list')

  <!-- general form elements -->
<div class="box box-primary">
  {!! Form::model($user = new App\User, ['url' => 'users', 'files' => true]) !!}
    @include('users.form', ['submitButtonText' => 'Tambah Pengguna'])
	{!! Form::close() !!}
</div>
</div>
@endsection
