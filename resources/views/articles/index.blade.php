@extends('main')

@section('content')
<!-- judul-halaman -->
<section id="judul-halaman">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <h1 class="judul-halaman">Tulisan Mapinsa</h1>
      </div>
      <div class="col-xs-6 page-icon">
        <img src="img/profil-icon.png" alt="profil icon"/>
      </div>
    </div>
  </div>
</section><!-- /#judul halaman -->

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <ul class="post-list list-unstyled">
          @foreach ($articles as $article)
            <li class="post">
              <h3 class="post-title">{{ $article->title }}</h3>
              <span class="meta-post">03 Agustus 2015 | Posted by <a href="#">{!! $article->user_id !!}</a></span>
              <div class="media">
                <div class="pull-left">
                  <img class="media-object" src="img/thumb4.svg" alt="...">
                </div>
                <div class="media-body">
                  {!! $article->body !!}
                  <span class="btn-selengkapnya"><a href="{{ url('/articles', $article->id) }}" role="button">Selengkapnya</a></span>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-4">
        Side Bar
      </div>
    </div>

  </div>

</section>

@endsection
