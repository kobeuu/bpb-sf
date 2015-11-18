@extends('main')

@section('content')

@include('partials.slider')

<!-- empat karakter -->
<section id="karakter">
  <div class="container text-center lead">
    <p class="italic"><strong>Beasiswa Pemimpin Bangsa </strong>adalah program beasiswa pendidikan terpadu yang dikelola oleh Sinergi Foundation dengan sistem asrama, bagi mahasiswa berprestasi dari kalangan dhuafa pada perguruan tinggi negeri di Indonesia.</p>

    <h4 class="heading lead">4 Karakter Mahasiswa Pemimpin Bangsa</h4>
    <div class="row text-center">
      <div class="col-xs-6 col-md-3">
        <span class="karakter-sprite akhlak">&nbsp;</span>
        <p class="karakter">Kemuliaan Akhlak</p>
      </div>
      <div class="col-xs-6 col-md-3">
        <span class="karakter-sprite islam">&nbsp;</span>
        <p class="karakter">Kepemimpinan Islam</p>
      </div>
      <div class="col-xs-6 col-md-3">
        <span class="karakter-sprite prestasi">&nbsp;</span>
        <p class="karakter">Akademik Berprestasi</p>
      </div>
      <div class="col-xs-6 col-md-3">
        <span class="karakter-sprite sosial">&nbsp;</span>
        <p class="karakter">Jiwa Sosial Kemasyarakatan</p>
      </div>
    </div>
  </div>
</section><!-- /#empat karakter -->

<!-- berita -->
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <h2 class="heading">Berita Aktivitas</h2>
      </div>
      <div class="col-sm-6 col-md-6 text-right btn-semua">
        <span class="btn-semua"> <a href="/articles" > Lihat Semua Berita Aktivitas</a></span>
      </div>
    </div>
    <div class="row">
      <ul class="post-list list-unstyled">
        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image 2">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="col-sm-6 col-md-4 hidden-sm">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image 3">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

      </ul>
    </div><!-- /.row -->
  </div>
</section><!-- /#berita -->

<!-- tulisan mapinsa -->
<section id="mapinsa">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <h2 class="heading">Tulisan Mapinsa</h2>
      </div>
      <div class="col-sm-6 col-md-6 text-right btn-semua">
        <span class="btn-semua"><a href="/articles" >Lihat Semua Berita Aktivitas</a></span>
      </div>
    </div>
    <div class="row">
      <ul class="post-list list-unstyled">
        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image 2">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="col-sm-6 col-md-4 hidden-sm">
            <div class="thumbnail">
              <img src="img/thumb.svg" alt="thumbnail image 3">
              <div class="caption">
                <h4>Lorem ipsum dolor sit amet sed utnim ad minim</h4>
                <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">Admin</a></span>
                <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
                <span class="btn-selengkapnya"><a href="#" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>

      </ul>
    </div><!-- /.row -->
  </div>
</section><!-- /#tulisan mapinsa -->

<!-- gallery -->
<section id="gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <h2 class="heading">Gallery</h2>
      </div>
      <div class="col-sm-6 col-md-6 text-right btn-semua">
        <span class="btn-semua">Lihat Semua Gallery</span>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-md-3">
        <a href="#" class="thumbnail">
          <img src="img/thumb2.svg" alt="gallery1">
        </a>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-3">
        <a href="#" class="thumbnail">
          <img src="img/thumb2.svg" alt="gallery2">
        </a>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-3">
        <a href="#" class="thumbnail">
          <img src="img/thumb2.svg" alt="gallery3">
        </a>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-3 hidden-sm">
        <a href="#" class="thumbnail">
          <img src="img/thumb2.svg" alt="gallery2">
        </a>
      </div>
    </div>
  </div>
</section><!-- /#gallery -->

<!-- mitra -->
<section id="mitra">
  <div class="container">
    <h2>Mitra Strategis</h2>
    <img class="logo-mitra" src="img/logo-hariff.png" alt="logo hariff">
    <img class="logo-mitra" src="img/logo-bi.png" alt="logo bi">
    <img class="logo-mitra" src="img/logo-shafira.png" alt="logo shafira">
    <p>Terima kasih dan penghargaan yang setinggi-tingginya kepada setiap donatur institusi dan individu lain yang tidak bisa kami sebutkan satu persatu. Semoga Allah membalas dengan yang lebih baik, dan mengabulkan terbentuknya Indonesia yang mandiri, produktif dan berkarakter.</p>
    <a href="/donasi" class="btn btn-primary" role="button">Paket Donasi Program</a>
  </div>
</section><!-- /#mitra -->
@endsection
