@extends('main')

@section('content')
<!-- judul-halaman -->
<section id="judul-halaman">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <h1 class="judul-halaman">Registration</h1>
      </div>
      <div class="col-xs-6 page-icon">
        <img src="img/profil-icon.png" alt="profil icon"/>
      </div>
    </div>
  </div>
</section><!-- /#judul halaman -->

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
