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
							<span class="meta-post">Published on {{ $article->published_at }} | Writen by <a href="{{ url('articles/user', $article->user->name) }}">{!! $article->user->name !!}</a>
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
						<a href="#">
							<img class="media-object" src="/img/dian-p.png" width="120px" alt="avatar">
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">{!! $article->user->name !!}</h4>
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta eiusmod tempor incididunt ut labore et dolore magn sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
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
