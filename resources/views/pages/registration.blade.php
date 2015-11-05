@extends('main')

@section('judul-halaman', 'Pendaftaran')

@section('content')

@include('partials.title')
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nomor Handphone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Handphone">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Subjek Pesan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subjek Pesan">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pesan</label>
            <textarea class="form-control" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
