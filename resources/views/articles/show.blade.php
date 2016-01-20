@extends('main')

@section('judul-halaman', 'Tulisan Peserta')

@section('content')

@include('partials.title')

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<h2 class="heading-post">{{ $article->title }}</h2>

				@unless ($article->tags->isEmpty())
					<div class="tags">
						<ul>
							<span class="meta-post">Published on {{ $article->published_at }} | Writen by <a href="{{ url('articles/user', $article->user->id) }}">{!! $article->user->name !!}</a>
							| Tagged under
							@foreach ($article->tags as $tag)
								<li> <a href="{{ url('/tags', $tag->name) }}"> {{ $tag->name }} </a> </li>
							@endforeach
							</span>
						</ul>
					</div>
				@endunless
				
				@if (count($article->image))
				<div class="thumbnail">
                    <img class="media-object" src="{{ url('uploads/images', $article->image) }}" height="500" width="720" alt="gambar istimewa">
                </div>
                @endif
				
				{!! $article->body !!}

				<div class="author">
					<div class="media-left">
						@if (count($article->user->avatar) > 0)
				          <img class="img-circle" src="{{ URL('/uploads/avatar/'. $article->user->avatar) }}" width="120px" alt="User Avatar">
				        @else
				          <img class="img-circle" src="{{ asset('/img/avatar.svg') }}" width="120px" alt='User Avatar'>
				        @endif
					</div>
					<div class="media-body">
						<h4 class="media-heading">{!! $article->user->name !!}</h4>
						<p>{!!$article->user->profil !!}</p>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				@include('partials.sidebar')
		</div>

	</div>
</section>

</div>

@endsection
