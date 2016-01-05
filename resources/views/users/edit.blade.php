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
      <div class="box-body">
        <div class="form-group">
          {!! Form::label('name', 'Nama Lengkap') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('email', 'Email address') !!}
          {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('universitas', 'Jurusan / Universitas') !!}
          {!! Form::text('universitas', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('profil', 'Profil') !!}
          {!! Form::textarea('profil', null, ['class' => 'form-control', 'style' => 'width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('avatar', 'Gambar Avatar') !!}
          {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
        </div>
      </div><!-- /.box-body -->

      <div class="box-footer">
        <a href="/password/email" class="btn btn-primary pull-right">Ganti Sandi</a>
        <button type="submit" class="btn btn-primary">Perbarui</button>
      </div>
      {!! Form::close() !!}
  </div><!-- /.box -->
</div><!-- /.col -->
@endsection
