@extends('main')
@section('judul-halaman', 'Donasi Program')

@section('content')

@include('partials.title')

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @include('partials.flash')

        <!-- Display Validation Errors -->
        @include('errors.list')

        {!! Form::open(['url' => route('messages.store')]) !!}

        <div class="form-group">
            {!! Form::label('ID Donatur') !!}
            {!! Form::text('donor_id', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Jumlah Transfer') !!}
            {!! Form::text('amount', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Dari Bank') !!}
            {!! Form::text('bank', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Subject Pesan') !!}
            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Pesan') !!}
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        <button type="submit" class="btn btn-primary btn-block">Kirim</button>

        {!! Form::close() !!}


      </div>
      <div class="col-md-4">
        <h3>Paket Tahunan :</h3>
        Th-1 @ Rp. 53.000.000<br/>
        Th-2 @ Rp. 22.000.000<br/>
        Th-3 @ Rp. 17.000.000<br/>
        Th-4 @ Rp. 19.000.000<br/>

        <h3>Paket Bulanan :</h3>
        @ Rp. 2.350.000 /anak/bulan

        <h3>Pembiayaan</h3>
        @ Rp. 111.000.000,- /anak selama 4 tahun<br/>

        Biaya sudah termasuk : Akademik, Pembinaan, Asrama dan Uang Saku

        <h3>Rekening Donasi</h3>
          BCA	008.305.3523<br/>
          BNI	002.868.4761<br/>
          Bank Mandiri Syariah	700.097.4107<br/>
          Bank Mandiri	130.000.226.2510<br/>
          Bank Muamalat Indonesia	113.000.2165<br/>
          BJB Syariah	001.010.100.2977<br/>
      </div>
    </div>
  </div>
</section>

@endsection
