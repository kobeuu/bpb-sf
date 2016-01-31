@extends('main')

@section('judul-halaman', 'Pendaftaran BPB 2016')

@section('content')

@include('partials.title')
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-12">

        @include('partials.flash')

        <h3>Data Diri Pendaftar</h3>
        <hr/>

        {!! Form::model($registrant = new App\Registrant, ['url' => 'registrants', 'class' => 'form-horizontal', 'files' => true, 'enctype' => "multipart/form-data"]) !!}
        
        <div class="form-group">
              {!! Form::label('Nama Lengkap', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9 {{ $errors->has('name') ? ' has-error' : '' }}">
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>

          </div>

          <div class="form-group">
              {!! Form::label('Jenis Kelamin', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('jk') ? ' has-error' : '' }}">
              <select class="form-control" name="jk">
                  <option>Pilih salah satu</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                @if ($errors->has('jk'))
                <span class="help-block">
                  <strong>{{ $errors->first('jk') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('Nomor HP', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('hp') ? ' has-error' : '' }}">
                {!! Form::text('hp', null, ['class' => 'form-control']) !!}
                @if ($errors->has('hp'))
                <span class="help-block">
                  <strong>{{ $errors->first('hp') }}</strong>
                </span>
              @endif
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Asal SMA', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('sma') ? ' has-error' : '' }}">
                {!! Form::text('sma', null, ['class' => 'form-control']) !!}
                @if ($errors->has('sma'))
                <span class="help-block">
                  <strong>{{ $errors->first('sma') }}</strong>
                </span>
              @endif
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Tahun Lulus', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('lulus') ? ' has-error' : '' }}">
                {!! Form::text('lulus', null, ['class' => 'form-control']) !!}
                @if ($errors->has('lulus'))
                <span class="help-block">
                  <strong>{{ $errors->first('lulus') }}</strong>
                </span>
              @endif
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Alamat Email', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
              </div>
          </div>

          <br/>

          <h3>Alamat Asal </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Nama Kampung / Jalan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('kampung') ? ' has-error' : '' }}">
              {!! Form::text('kampung', null, ['class' => 'form-control']) !!}
              @if ($errors->has('kampung'))
                <span class="help-block">
                  <strong>{{ $errors->first('kampung') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Desa / Kelurahan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('desa') ? ' has-error' : '' }}">
              {!! Form::text('desa', null, ['class' => 'form-control',]) !!}
              @if ($errors->has('desa'))
                <span class="help-block">
                  <strong>{{ $errors->first('desa') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Kecamatan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
              {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
              @if ($errors->has('kecamatan'))
                <span class="help-block">
                  <strong>{{ $errors->first('kecamatan') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Kota / Kabupaten', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('kota') ? ' has-error' : '' }}">
              {!! Form::text('kota', null, ['class' => 'form-control']) !!}
              @if ($errors->has('kota'))
                <span class="help-block">
                  <strong>{{ $errors->first('kota') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Provinsi', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('provinsi') ? ' has-error' : '' }}">
              {!! Form::text('provinsi', null, ['class' => 'form-control']) !!}
              @if ($errors->has('provinsi'))
                <span class="help-block">
                  <strong>{{ $errors->first('provinsi') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Sudah diterima di PTN </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Universitas / PTN', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('universitas') ? ' has-error' : '' }}">
              {!! Form::text('universitas', null, ['class' => 'form-control']) !!}
              @if ($errors->has('universitas'))
                <span class="help-block">
                  <strong>{{ $errors->first('universitas') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Fakultas', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('fakultas') ? ' has-error' : '' }}">
              {!! Form::text('fakultas', null, ['class' => 'form-control']) !!}
              @if ($errors->has('fakultas'))
                <span class="help-block">
                  <strong>{{ $errors->first('fakultas') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Jurusan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('jurusan') ? ' has-error' : '' }}">
              {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
              @if ($errors->has('jurusan'))
                <span class="help-block">
                  <strong>{{ $errors->first('jurusan') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Data keluarga </h3>
          <hr/>
          <div class="form-group">
              {!! Form::label('Anak Ke', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('name') ? ' has-error' : '' }}">
              {!! Form::text('anak', null, ['class' => 'form-control']) !!}
              @if ($errors->has('anak'))
                <span class="help-block">
                  <strong>{{ $errors->first('anak') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Jumlah Saudara', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('name') ? ' has-error' : '' }}">
              {!! Form::text('saudara', null, ['class' => 'form-control']) !!}
              @if ($errors->has('saudara'))
                <span class="help-block">
                  <strong>{{ $errors->first('saudara') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              {!! Form::label('Penghasilan / bulan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('name') ? ' has-error' : '' }}">
                <select class="form-control" name="penghasilan">
                  <option>> Rp. 500.000</option>
                  <option>Rp. 500.000 - Rp. 1.000.000</option>
                  <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                  <option>> Rp. 2.000.000</option>
                </select>
                @if ($errors->has('penghasilan'))
                <span class="help-block">
                  <strong>{{ $errors->first('penghasilan') }}</strong>
                </span>
              @endif
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('Jumlah Tanggungan', null, ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9{{ $errors->has('tanggungan') ? ' has-error' : '' }}">
              {!! Form::text('tanggungan', null, ['class' => 'form-control']) !!}
              @if ($errors->has('tanggungan'))
                <span class="help-block">
                  <strong>{{ $errors->first('tanggungan') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Kecerdasan Sosial </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Jelaskan pendapat anda tentang keluarga anda
              </div>
              <div class="col-sm-12{{ $errors->has('tentang_keluarga') ? ' has-error' : '' }}">
              {!! Form::textarea('tentang_keluarga', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('tentang_keluarga'))
                <span class="help-block">
                  <strong>{{ $errors->first('tentang_keluarga') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Tuliskan dan deskripsikan tentang sahabat akrab anda :
              </div>
              <div class="col-sm-12{{ $errors->has('tentang_sahabat') ? ' has-error' : '' }}">
              {!! Form::textarea('tentang_sahabat', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('tentang_sahabat'))
                <span class="help-block">
                  <strong>{{ $errors->first('tentang_sahabat') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Jelaskan kondisi ekonomi keluarga :
              </div>
              <div class="col-sm-12{{ $errors->has('tentang_ekonomi') ? ' has-error' : '' }}">
              {!! Form::textarea('tentang_ekonomi', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('tentang_ekonomi'))
                <span class="help-block">
                  <strong>{{ $errors->first('tentang_ekonomi') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Data Prestasi </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Akademik / Sekolah (Bidang Perlombaan dan Peringkat)
              </div>
              <div class="col-sm-12{{ $errors->has('sekolah') ? ' has-error' : '' }}">
              {!! Form::textarea('sekolah', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Juara Umum Pararel tingkat sekolah']) !!}
              @if ($errors->has('sekolah'))
                <span class="help-block">
                  <strong>{{ $errors->first('sekolah') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Prestasi Luar Sekolah (Nama Lomba, Ruang Lingkun, dan Peringkat)
              </div>
              <div class="col-sm-12{{ $errors->has('luar_sekolah') ? ' has-error' : '' }}">
              {!! Form::textarea('luar_sekolah', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Juara I Olimpiade Matematika tingkat Provinsi']) !!}
              @if ($errors->has('luar_sekolah'))
                <span class="help-block">
                  <strong>{{ $errors->first('luar_sekolah') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Organisasi yang pernah diikuti (Nama Organisasi, Jabatan, Tahun kepengurusan)
              </div>
              <div class="col-sm-12{{ $errors->has('organisasi') ? ' has-error' : '' }}">
              {!! Form::textarea('organisasi', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Misal : Ketua OSIS tahun 2015']) !!}
              @if ($errors->has('organisasi'))
                <span class="help-block">
                  <strong>{{ $errors->first('organisasi') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Profil Diri </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Tujuan dan harapan mengikuti program
              </div>
              <div class="col-sm-12{{ $errors->has('harapan') ? ' has-error' : '' }}">
              {!! Form::textarea('harapan', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('harapan'))
                <span class="help-block">
                  <strong>{{ $errors->first('harapan') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Kelebihan dan Kelemahan Diri
              </div>
              <div class="col-sm-12{{ $errors->has('potensi') ? ' has-error' : '' }}">
              {!! Form::textarea('potensi', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('potensi'))
                <span class="help-block">
                  <strong>{{ $errors->first('potensi') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Cita-cita terbesar / Mimpi yang spektakuler
              </div>
              <div class="col-sm-12{{ $errors->has('mimpi') ? ' has-error' : '' }}">
              {!! Form::textarea('mimpi', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('mimpi'))
                <span class="help-block">
                  <strong>{{ $errors->first('mimpi') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12">
                Motto hidup
              </div>
              <div class="col-sm-12{{ $errors->has('moto') ? ' has-error' : '' }}">
              {!! Form::textarea('moto', null, ['class' => 'form-control', 'rows' => '3']) !!}
              @if ($errors->has('moto'))
                <span class="help-block">
                  <strong>{{ $errors->first('moto') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Pas Photo </h3>
          <div class="form-group">
              <div class="col-sm-12">
                Pas Photo terbaru, format jpg/png, ukuran maksimal 256kB.
              </div>
              <div class="col-sm-12{{ $errors->has('foto') ? ' has-error' : '' }}">
              {!! Form::file('foto') !!}
              @if ($errors->has('foto'))
                <span class="help-block">
                  <strong>{{ $errors->first('foto') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <h3>Berkas Lampiran </h3>
          <hr/>
          <div class="form-group">
              <div class="col-sm-12">
                Berkas lampiran, terdiri dari pas foto, ijazah, dan raport. semua berkas diarsipkan ke dalam .zip. ukuran tidak lebih dari 1 MB.
              </div>
              <div class="col-sm-12{{ $errors->has('lampiran') ? ' has-error' : '' }}">
              {!! Form::file('lampiran') !!}
              @if ($errors->has('lampiran'))
                <span class="help-block">
                  <strong>{{ $errors->first('lampiran') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <br/>
          <div class="form-group">
              <div class="col-sm-12">
                <div class="{{ $errors->has('checkbox') ? ' has-error' : '' }}">
                  @if ($errors->has('checkbox'))
                  <span class="help-block">
                    <strong>{{ $errors->first('checkbox') }}</strong>
                  </span>
                  @endif
                </div>
                {!! Form::checkbox('checkbox', null, false ) !!}
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

      <!-- <div class="col-sm-4">
        @include('partials.sidebar')
      </div> -->
    </div>
  </div>
</section>

@endsection
