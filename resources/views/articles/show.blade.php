@extends('main')

@section('judul-halaman', 'Tulisan Peserta')

@section('content')

@include('partials.title')

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="thumbnail">
					<img src="/uploads/images/{{ $article->image }}"  height="500" width="720" alt="">
				</div>
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

				{!! $article->body !!}

				<div class="author">
					<div class="media-left">
						<img class="media-object" src="/img/dian-p.png" width="120px" alt="avatar">
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
