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
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-primary pull-right" href="/auth/logout">Ganti Password</a>
  </div>

