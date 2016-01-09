@extends('admin')

@section('page_title', 'Perbarui Profil')

@section('content')

<div class="col-md-12">

  @include('partials.flash')

  <!-- Display Validation Errors -->
  @include('errors.list')

  <!-- general form elements -->
  <div class="box box-primary">
    <!-- form start -->
    {!! Form::model($user , ['method' => 'PATCH', 'action' => ['UsersController@update' , $user->id], 'files' => true]) !!}
      @include('users.form', ['submitButtonText' => 'Perbarui Profil'])
    {!! Form::close() !!}
  </div><!-- /.box -->
</div><!-- /.col -->
@endsection
