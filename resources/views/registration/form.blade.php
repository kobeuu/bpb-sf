@extends('main')

@section('judul-halaman', 'Pendaftaran BPB 2016')

@section('content')

@include('partials.title')
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-8">

        @include('partials.flash')
        <!-- Display Validation Errors -->
        @include('errors.list')

        <h3>Data Diri Pendaftar</h3>
        <hr/>

        {!! Form::model($registrant = new App\Registrant, ['url' => 'registrants', 'class' => 'form-horizontal', 'files' => true, 'enctype' => "multipart/form-data"]) !!}
        
        <div class="form-group">
              {!! Form::label('Nama Lengkap', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('Jenis Kelamin', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('jk', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('Nomor HP', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                {!! Form::text('hp', null, ['class' => 'form-control']) !!}
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Asal SMA', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                {!! Form::text('sma', null, ['class' => 'form-control']) !!}
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Tahun Lulus', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                {!! Form::text('lulus', null, ['class' => 'form-control']) !!}
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Alamat EMail', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
              </div>
          </div>

          <br/>

          <h3>Alamat Asal </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Nama Kampung / Jalan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('kampung', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Desa / Kelurahan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('desa', null, ['class' => 'form-control',]) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Kecamatan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Kota / Kabupaten', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('kota', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Provinsi', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('provinsi', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <br/>
          <h3>Sudah diterima di PTN </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Universitas / PTN', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('universitas', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Fakultas', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Jurusan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <br/>
          <h3>Data keluarga </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Anak Ke', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('anak', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Jumlah Saudara', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('saudara', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Penghasilan / bulan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                <select class="form-control" name="penghasilan">
                  <option>> Rp. 500.000</option>
                  <option>Rp. 500.000 - Rp. 1.000.000</option>
                  <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                  <option>> Rp. 2.000.000</option>
                </select>
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Jumlah Tanggungan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
              {!! Form::text('tanggungan', null, ['class' => 'form-control']) !!}
            </div>
          </div>

          <br/>
          <h3>Kecerdasan Sosial </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Jelaskan pendapat anda tentang keluarga anda
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('tentang_keluarga', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Tuliskan dan deskripsikan tentang sahabat akrab anda :
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('tentang_sahabat', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Jelaskan kondisi ekonomi keluarga :
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('tentang_ekonomi', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>

          <br/>
          <h3>Data Prestasi </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Akademik / Sekolah (Bidang Perlombaan dan Peringkat)
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('sekolah', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Juara Umum Pararel tingkat sekolah']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Prestasi Luar Sekolah (Nama Lomba, Ruang Lingkun, dan Peringkat)
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('luar_sekolah', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Juara I Olimpiade Matematika tingkat Provinsi']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Organisasi yang pernah diikuti (Nama Organisasi, Jabatan, Tahun kepengurusan)
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('organisasi', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Ketua OSIS tahun 2015']) !!}
            </div>
          </div>

          <br/>
          <h3>Profil Diri </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Tujuan dan harapan mengikuti program
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('harapan', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Kelebihan dan Kelemahan Diri
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('potensi', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Cita-cita terbesar / Mimpi yang spektakuler
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('mimpi', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Motto hidup
              </div>
              <div class="col-sm-12">
              {!! Form::textarea('moto', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
          </div>

          <br/>
          <h3>Pas Photo </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Pas Photo terbaru, format jpg/png, ukuran maksimal 256kB.
              </div>
              <div class="col-sm-12">
              {!! Form::file('foto') !!}
            </div>
          </div>

          <br/>
          <div class="form-group">
              <div class="col-sm-12">
                {!! Form::checkbox('checkbox', null, ['class' => 'form-control']) !!}
                Saya bertanggung jawab atas kebenaran semua data yang dimasukan.
              </div>
          </div>

          <br/>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </div>

        {!! Form::close() !!}
      </div>
      <div class="col-sm-4">
        @include('partials.sidebar')
      </div>
    </div>
  </div>
</section>

@endsection
