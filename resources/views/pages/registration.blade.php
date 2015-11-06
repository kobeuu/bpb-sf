@extends('main')

@section('judul-halaman', 'Pendaftaran')

@section('content')

@include('partials.title')
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <form>
          <h3>Data Diri Pendaftar</h3>
          <div class="form-group">
    				{!! Form::label('nama', 'Nama Lengkap') !!}
    				{!! Form::input('nama', 'null', null, ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('nama', 'Jenis Kelamin') !!}
    				{!! Form::input('nama', 'null', null, ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('nama', 'Nomor HP') !!}
    				{!! Form::input('nama', 'null', null, ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('nama', 'Asal SMA') !!}
    				{!! Form::input('nama', 'null', null, ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('nama', 'Alamat email') !!}
    				{!! Form::input('nama', 'null', null, ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('excerpt', 'Alamat Lengkap') !!}
    				{!! Form::input('excerpt', null, null, ['class' => 'form-control', 'style' => 'width: 100%; height: 60px;border: 1px solid #dddddd;']) !!}
    			</div>
          <h3>Lampiran</h3>
          <div class="form-group">
    				{!! Form::label('tag_list', 'Keterangan Penghasilan Ortu') !!}
    				{!! Form::file('image', ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('tag_list', 'Pernyataan Ortu') !!}
    				{!! Form::file('image', ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('tag_list', 'Rekomendasi Dosen') !!}
    				{!! Form::file('image', ['class' => 'form-control']) !!}
    			</div>
          <div class="form-group">
    				{!! Form::label('tag_list', 'Rekomendasi Teman') !!}
    				{!! Form::file('image', ['class' => 'form-control']) !!}
    			</div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
