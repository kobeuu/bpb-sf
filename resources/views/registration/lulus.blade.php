@extends('main')

@section('judul-halaman', 'Pengumuman Resmi Seleksi Nasional BPB 2016')

@section('meta')
<meta name="description" content="Beasiswa Pemimpin Bangsa Sinergi Foundation" />
    <meta name="keywords" content="beasiswa pemimpin bangsa, bpb, sinergi foundation" />
@endsection

@section('content')

@include('partials.title')

<!-- mitra -->
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center">

        <br/><br/>
        
        <div class="form-group">
          <p>Nama Pendaftar <strong>{{ strtoupper($registrant->name) }}</strong></p>
          <p>Asal Daerah <strong>{{ $registrant->kota }}</strong> - Universitas <strong>{{ $registrant->universitas }}</strong></p>
          <h2>{{ $message }}</h2>
        </div>
        <br/><br/>
          <p>Keputusan Panitia bersifat mutlak dan tidak bisa diganggu gugat</p>


      </div>
    </div>
  </div>
</section><!-- /#mitra -->

@endsection
