@extends('main')

@section('meta')
<meta name="description" content="Beasiswa Pemimpin Bangsa Sinergi Foundation" />
    <meta name="keywords" content="beasiswa pemimpin bangsa, bpb, sinergi foundation" />
@endsection

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

@if (count($news))
<!-- berita -->
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <h2 class="heading">Berita Aktivitas</h2>
      </div>
      <div class="col-sm-6 col-md-6 text-right btn-semua">
        <span class="btn-semua"> <a href="/news" > Lihat Semua Berita Aktivitas</a></span>
      </div>
    </div>
    <div class="row">
      <ul class="post-list list-unstyled">

        @foreach ($news as $new)
        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{ url('uploads/images', $new->image) }}" alt="thumbnail image" class="img-responsive">
              <div class="caption">
                <h4>{{ $new->title }}</h4>
                <span class="meta-post">Published at {{ $new->published_at }}</span>
                {!! substr($new->body, 0, 250 ) !!} ...
                <span class="btn-selengkapnya"><a href="{{ url('/news', $new->slug) }}" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>
        @endforeach

      </ul>
    </div><!-- /.row -->
  </div>
</section><!-- /#berita -->
@endif

@if (count($articles))
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
        @foreach ($articles as $article)
        <li>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                @if (count($article->image))
                  <img class="media-object" src="{{ url('uploads/images', $article->image) }}" height="190" width="345" alt="...">
                @else
                  <img class="media-object" src="{{ url('img/thumb.svg') }}" alt="...">
                @endif
              <div class="caption">
                <h4>{{ $article->title }}</h4>
                <span class="meta-post">{{ $article->published_at }} | Posted by <a href="#">{{ $article->user->name }}</a></span>
                {!! substr($article->body, 0, 250 ) !!} ...
                <span class="btn-selengkapnya"><a href="{{ url('/articles', $article->slug) }}" role="button">Selengkapnya</a></span>
              </div>
            </div>
          </div>
        </li>
        @endforeach

      </ul>
    </div><!-- /.row -->
  </div>
</section><!-- /#tulisan mapinsa -->

@endif

@if (count($images))
<!-- gallery -->
<section id="gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <h2 class="heading">Gallery</h2>
      </div>
      <div class="col-sm-6 col-md-6 text-right btn-semua">
        <span class="btn-semua"><a href="/gallery" >Lihat Semua Gallery</a></span>
      </div>
    </div>
    <div class="row">
      @foreach ($images as $image)
      <div class="col-xs-6 col-sm-4 col-md-3">
        <a href="#" class="thumbnail">
          <img src="{{ url('/uploads/gallery', $image->file) }}" alt="gallery1">
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- /#gallery -->

@endif

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
