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

      <div class="col-md-12">

        <br/><br/>
        
        @include('partials.flash')

        <!-- Display Validation Errors -->
        @include('errors.list')

        {!! Form::open(['url' => '/kelulusan', 'method' => "post"]) !!}
        
        <div class="form-group text-center">
            {!! Form::label('Untuk melihat hasil, silakan masukan alamat email yang digunakan pada saat pendaftaran') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Lihat Hasil</button>
        </div>

        {!! Form::close() !!}

      </div>
    </div>
  </div>
</section><!-- /#mitra -->

@endsection
