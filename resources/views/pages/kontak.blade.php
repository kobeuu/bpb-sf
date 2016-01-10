@extends('main')

@section('judul-halaman', 'Kontak Kami')

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
          <strong class="heading-office">Asrama Bandung</strong><br>
          <strong>Asrama I </strong>Jalan Tubagus Ismail III No. 10 BandungTelp. 022.250 1987<br>
          <strong>Asrama II </strong>Jalan Manteron No. 18 Bandung Telp. 022.250 1987<br>
          <strong>Asrama III </strong>Jalan Gagak No. 03 Bandung Telp. 022.250 1987<br>
        </address>

        <address>
          <strong class="heading-office">Asrama UI Depok</strong><br>
          <strong>Asrama I </strong>Jalan Tubagus Ismail III No. 10 BandungTelp. 022.250 1987
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

        @include('partials.flash')

        {!! Form::open(['url' => route('messages.store')]) !!}

        {!! Form::label('Nama Lengkap') !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('Nomor Kontak') !!}
        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
            {!! Form::text('hp', null, ['class' => 'form-control']) !!}
            @if ($errors->has('hp'))
                <span class="help-block">
                  <strong>{{ $errors->first('hp') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('Alamat Email') !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('Subject Pesan') !!}
        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            @if ($errors->has('subject'))
                <span class="help-block">
                  <strong>{{ $errors->first('subject') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('Pesan') !!}
        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
            @if ($errors->has('message'))
                <span class="help-block">
                  <strong>{{ $errors->first('message') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary btn-block">Kirim</button>

        {!! Form::close() !!}

      </div>
    </div>
  </div>
</section><!-- /#mitra -->

@endsection
