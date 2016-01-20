@extends('admin')

@section('page_title', 'Detail Pendaftar')

@section('content')

<div class="col-md-3">

  @include('partials.flash')

  <!-- Display Validation Errors -->
  @include('errors.list')

  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="/uploads/registrants/{{ $registrant->foto }}" alt="User profile picture">
      <h3 class="profile-username text-center">{{ $registrant->name }}</h3>
      <p class="text-muted text-center">{{ $registrant->kota }}</p>

    </div><!-- /.box-body -->
  </div><!-- /.box -->
  {!! Form::open(['method' => 'PATCH', 'action' => ['RegistrantsController@update', $registrant->id]]) !!}
        <button type="submit" class="btn btn-primary text-center">Lulus Seleksi</button>
  {!! Form::close() !!}
</div><!-- /.col -->

<div class="col-md-9">
  <div class="box box-primary">
    <div class="box-body">
      <dl class="dl-horizontal">
        <h4 class="text-center">Data Diri Pendaftar</h4>
        <dt>Nama Lengkap</dt><dd>{{ $registrant->name }}</dd>
        <dt>Jenis Kelamin</dt><dd>{{ $registrant->jk }}</dd>
        <dt>Nomor HP</dt><dd>{{ $registrant->hp }}</dd>
        <dt>Asal SMA</dt><dd>{{ $registrant->sma }}</dd>
        <dt>Tahun Lulus</dt><dd>{{ $registrant->lulus }}</dd>
        <dt>Alamat Email</dt><dd>{{ $registrant->email }}</dd>
        
        <hr/>
        <h4 class="text-center">Alamat Asal</h4>
        <dt>Jalan / Kampung</dt><dd>{{ $registrant->kampung }}</dd>
        <dt>Desa</dt><dd>{{ $registrant->desa }}</dd>
        <dt>Kecamatan</dt><dd>{{ $registrant->kecamatan }}</dd>
        <dt>Kota / Kabupaten</dt><dd>{{ $registrant->kota }}</dd>
        <dt>Provinsi</dt><dd>{{ $registrant->provinsi }}</dd>

        <hr/>
        <h4 class="text-center">Diterima di PTN</h4>
        <dt>Jurusan</dt><dd>{{ $registrant->jurusan }}</dd>
        <dt>Fakultas</dt><dd>{{ $registrant->fakultas }}</dd>
        <dt>Universitas</dt><dd>{{ $registrant->universitas }}</dd>

        <hr/>
        <h4 class="text-center">Data Keluarga</h4>
        <dt>Anak Ke</dt><dd>{{ $registrant->anak }}</dd>
        <dt>Jumlah Saudara</dt><dd>{{ $registrant->saudara }}</dd>
        <dt>Penghasilan / Bulan</dt><dd>{{ $registrant->penghasilan }}</dd>
        <dt>Jumlah Tanggungan</dt><dd>{{ $registrant->tanggungan }}</dd>
        
        <hr/>
        <h4 class="text-center">Kecerdasan Sosial</h4>
        <dt>tentang keluarga</dt><dd>{{ $registrant->tentang_keluarga }}</dd>
        <dt>tentang sahabat</dt><dd>{{ $registrant->tentang_sahabat }}</dd>
        <dt>Kondisi ekonomi</dt><dd>{{ $registrant->tentang_keluarga }}</dd>
        
        <hr/>
        <h4 class="text-center">Data Prestasi</h4>
        <dt>Akademik / Sekolah</dt><dd>{{ $registrant->sekolah }}</dd>
        <dt>Luar Sekolah</dt><dd>{{ $registrant->luar_sekolah }}</dd>
        <dt>Organisasi yang diikuti</dt><dd>{{ $registrant->organisasi }}</dd>
        
        <hr/>
        <h4 class="text-center">Profil Diri</h4>
        <dt>Tujuan dan harapan</dt><dd>{{ $registrant->harapan }}</dd>
        <dt>Potensi</dt><dd>{{ $registrant->potensi }}</dd>
        <dt>Cita-cita terbesar</dt><dd>{{ $registrant->mimpi }}</dd>
        <dt>Motto hidup</dt><dd>{{ $registrant->moto }}</dd>
      </dl>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!-- ./col -->
@endsection
