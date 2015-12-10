@extends('main')

@section('judul-halaman', 'Tulisan Mapinsa')

@section('content')

@include('partials.title')

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <ul class="post-list list-unstyled">
          @foreach ($news as $new)
            <li class="post">
              <h3 class="post-title">{{ $new->title }}</h3>
              <div class="tags">
    						<ul>
    							<span class="meta-post">Published on {{ $new->published_at }} | Writen by <a href="{{ url('/news/user', $new->user->name) }}">{!! $new->user->name !!}</a>
    							| Tagged under
    							@foreach ($new->tags as $tag)
    								<li> <a href="{{ url('/tags', $tag->name) }}"> {{ $tag->name }} </a> </li>
    							@endforeach
    							</span>
    						</ul>
    					</div>
              <div class="media">
                <div class="pull-left">
                  @if (count($new->image) > 0)
                    <img class="media-object" src="{{ url('uploads/images', $new->image) }}" height="140" width="220" alt="...">
                  @else
                    <img class="media-object" src="{{ url('img/thumb4.svg') }}" height="140" width="220" alt="...">
                  @endif
                </div>

                <div class="media-body">
                  {!! substr($new->body, 0, 250 ) !!} ...
                  <p class="btn-selengkapnya"><a href="{{ url('/news', $new->id) }}" role="button">Selengkapnya</a></p>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
        {!! $news->render() !!}
      </div>
      <div class="col-md-4">
        @include('partials.sidebar')
      </div>
    </div>

  </div>

</section>

@endsection
