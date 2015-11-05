@extends('main')

@section('judul-halaman', 'Kontak Kami')

@section('content')

@include('partials.title')

<!-- mitra -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <address>
          <strong class="heading-office">Sinergi Foundation Office</strong><br>
          Jl. HOS Tjokroaminoto (Pasirkaliki) No.143<br>
          Bandung 40173 Telp: (022) 6120218;<br>
          Fax: (022) 6120130
        </address>

        <address>
          <strong>Gedung Wakaf 99</strong> Jl. Sidomukti No. 99 H Bandung 40123
          Telp: (022) 2513991;<br>
          Fax. (022) 2511865
        </address>

        <hr class="divider">

        <address>
          <strong class="heading-office">Asrama I BPB</strong><br>
          Jalan Tubagus Ismail III No. 10 Bandung<br>
          Telp. 022.250 1987
        </address>

        <address>
          <strong class="heading-office">Asrama II BPB</strong><br>
          Jalan Manteron No. 18 Bandung<br>
          Telp. 022.250 1987
        </address>

        <hr class="divider">

        <address>
          <strong class="heading-office">Kontak Kami</strong><br>
          SMS       : 0851 0004 2009<br>
          WA      : 081 321 200 100<br>
          pin BB : 266 092 B3
        </address>
      </div>

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
</section><!-- /#mitra -->

@endsection
