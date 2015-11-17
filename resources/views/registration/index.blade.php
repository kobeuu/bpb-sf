@extends('main')

@section('judul-halaman', 'Pendaftaran')

@section('content')

@include('partials.title')
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <!-- Display Validation Errors -->
        @include('errors.list')
        
        <h3>Data Diri Pendaftar</h3>

        {!! Form::open(['url' => route('registrants.store')]) !!}

          <div class="form-group">
              {!! Form::label('Nama Lengkap') !!}
              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Jenis Kelamin') !!}
              {!! Form::text('sex', null, ['class' => 'form-control', 'placeholder' => 'Jenis Kelamin']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Nomor HP') !!}
              {!! Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Nomor HP']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Asal SMA') !!}
              {!! Form::text('school', null, ['class' => 'form-control', 'placeholder' => 'Asal SMA']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Alamat Email') !!}
              {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Alamat Email']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Alamat Lengkap') !!}
              {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Alamat Lengkap']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('Lampiran') !!}
              {!! Form::text('attachment', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
          </div>

          <button type="submit" class="btn btn-primary btn-block">Add</button>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>

@endsection
