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
        
        @include('partials.flash')

        {!! Form::open(['url' => '/kelulusan', 'method' => "post"]) !!}


        {!! Form::label('Untuk melihat hasil, silakan masukan alamat email yang digunakan pada saat pendaftaran') !!}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
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
