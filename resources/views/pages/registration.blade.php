@extends('main')

@section('judul-halaman', 'Pendaftaran')

@section('content')

@include('partials.title')

<section id="form-registration">
  <div class="form-group">
    <label class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-6">
      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
      <input type="password" class="form-control" name="password">
    </div>
  </div>
</section>

@endsection
