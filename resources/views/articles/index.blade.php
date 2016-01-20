@extends('main')

@section('judul-halaman', 'Tulisan Mapinsa')

@section('content')

@include('partials.title')

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <ul class="post-list list-unstyled">
          @foreach ($articles as $article)
            <li class="post">
              <a href="{{ url('/articles', $article->slug) }}"><h3 class="post-title">{{ $article->title }}</h3></a>
              <div class="tags">
    						<ul>
    							<span class="meta-post">Published on {{ $article->published_at }} | Writen by <a href="{{ url('/articles/user', $article->user->id) }}">{!! $article->user->name !!}</a>
    							| Tagged under
    							@foreach ($article->tags as $tag)
    								<li> <a href="{{ url('/tags', $tag->name) }}"> {{ $tag->name }} </a> </li>
    							@endforeach
    							</span>
    						</ul>
    					</div>
              <div class="media">
                <div class="pull-left">
                  @if (count($article->image))
                    <img class="media-object" src="{{ url('uploads/images', $article->image) }}" height="140" width="220" alt="...">
                  @else
                    <img class="media-object" src="{{ url('img/thumb4.svg') }}" height="140" width="220" alt="...">
                  @endif
                </div>

                <div class="media-body">
                  {!! substr($article->body, 0, 250 ) !!} ...
                  <p class="btn-selengkapnya"><a href="{{ url('/articles', $article->slug) }}" role="button">Selengkapnya</a></p>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
        {!! $articles->render() !!}
      </div>
      <div class="col-md-4">
        @include('partials.sidebar')
      </div>
    </div>

  </div>

</section>

@endsection
