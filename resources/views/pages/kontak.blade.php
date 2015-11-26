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

        @include('partials.flash')

        <!-- Display Validation Errors -->
        @include('errors.list')

        {!! Form::open(['url' => route('messages.store')]) !!}

        <div class="form-group">
            {!! Form::label('Nama Lengkap') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Nomor Kontak') !!}
            {!! Form::text('hp', null, ['class' => 'form-control', 'placeholder' => 'Nomor Kontak']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Alamat Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Alamat Email']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Subject Pesan') !!}
            {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject Pesan']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Pesan') !!}
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Kirim</button>

        {!! Form::close() !!}

      </div>
    </div>
  </div>
</section><!-- /#mitra -->

@endsection
