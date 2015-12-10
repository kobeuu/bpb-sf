@extends('main')

@section('judul-halaman', 'Cek Kelulusan')

@section('content')

@include('partials.title')

<!-- mitra -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-12">

        @include('partials.flash')

        <!-- Display Validation Errors -->
        @include('errors.list')

        {!! Form::open(['url' => '/kelulusan', 'method' => "post"]) !!}

        <div class="form-group">
            {!! Form::label('Alamat Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Cek</button>

        {!! Form::close() !!}

      </div>
    </div>
  </div>
</section><!-- /#mitra -->

@endsection
