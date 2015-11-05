@extends('main')

@section('judul-halaman', 'Profil Lembaga')

@section('content')

@include('partials.title')

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Sinergi Foundation</h4>
        <p>merupakan lembaga independen milik publik yang berupaya mendorong serta membangun kolaborasi menuju masyarakat yang mandiri, produktif dan berkarakter.</p>

        <h4>Beasiswa Pemimpin Bangsa</h4>
        <p>adalah program beasiswa pendidikan terpadu yang dikelola oleh Sinergi Foundation dengan sistem asrama, bagi mahasiswaberprestasi dari kalangan dhuafa pada perguruan tinggi negeri di Indonesia.</p>
      </div>
      <div class="col-md-6">
        <img src="img/thumb3.svg" alt="" class="img-responsive">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h4>Latar Belakang</h4>
        <ol>
          <li>Banyaknya lulusan SMA dan mahasiswa di PTN yang berprestasi dari kalangan dhuafa yang terkendala biaya pendidikan dan bea-hidup.</li>
          <li>Perlu upaya sistematis untuk membangun mental dan karakter mahasiswa agar tidak sekedar memiliki prestasi akademik, akan tetapi juga
  memiliki jiwa kemandirian, kewirausahaan, kepemimpinan dan kemuliaan akhlak.</li>
          <li>Perlunya gerakan kaderisasi calon-calon pemimpin negeri yang memiliki integritas keilmuan dan moral.</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4>Visi</h4>
        <p class="lead">Menjadi program beasiswa pertama dan terdepan yang mencetak 300 calon pemimpin bangsa pada tahun 2020</p>
      </div>
      <div class="col-md-6">
        <h4>Misi</h4>
        <ol>
          <li>Membantu mahasiswa berprestasi dari kalangan dhuafa agar dapat menempuh dan menyelesaikan pendidikan tinggi dengan hasil yang baik.</li>
          <li>Menyiapkan generasi calon pemimpin negeri yang memiliki kualifikasi akademik yang tinggi, memiliki jiwa kemandirian, kewirausahaan, kepemimpinan dan kemuliaan akhlak.</li>
          <li>Mencetak kader terbaik dari kalangan ummat Islam untuk menjadi pemimpin di masa depan.</li>
        </ol>
      </div>
    </div>

    <h4>4 Karakter Mahasiswa Pemimpin Bangsa</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="img/karakter-icon.png" alt="...">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Kemuliaan Akhlak</h4>
            <p>ahasiswa Pemimpin Bangsa merupakan mahasiswa yang memiliki gaya kepemimpinan Islam. Mahasiswa yang mengambil keteladanan kepemimpinan Rasulullah dan Khulafaurrasyidin serta pemimpin Islam lainnya. Mahasiswa Pemimpin Bangsa adalah mahasiswa yang dapat menjadi penggerak atas perubahan perbaikan bangsa ini.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="img/karakter-icon.png" alt="...">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Kepemimpinan Islam</h4>
            <p>Mahasiswa Pemimpin Bangsa adalah mahasiswa yang memiliki pemahaman Islam secara kaffah. Pemahaman ini diwujudkan dengan akhlak yang mulia. Mahasiswa Pemimpin Bangsa dapat menerapkan nilai-nilai Islami pada kehidupan sehari-hari. Mahasiswa Pemimpin Bangsa merupakan mahasiswa yang mengajak orang lain berbuat kebaikan melalui teladan dan kemuliaan akhlak yang ditampakkannya.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="img/karakter-icon.png" alt="...">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Akademik Berprestasi</h4>
            <p>Mahasiswa Pemimpin Bangsa adalah mahasiswa yang memiliki prestasi dalam bidang yang ditekuninya. Mahasiswa yang memiliki keahlian di bidangnya dalam memiliki intelektual yang tinggi dan bermental juara dalam berbagai kompetisi. Mahasiswa ini adalah mahasiswa yang pandai dan terampil dalam mengkomunikasikan ide, olahraga dan lain-lain.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="img/karakter-icon.png" alt="...">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Jiwa Sosial Kemasyarakatan</h4>
            <p>Mahasiswa Pemimpin Bangsa adalah mahasiswa yang memiliki kepedulian sosial, kepekaan sosial terhadap warga sekitar dan negara, memiliki jiwa kedermawanan sosial, aktif dalam kegiatn sosial kemasyarakatan, misalnya relawan kegiatan sosial.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
