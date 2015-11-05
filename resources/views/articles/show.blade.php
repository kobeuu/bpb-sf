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
							@foreach ($article->tags as $tag)
								<li> {{ $tag->name }} </li>
							@endforeach
						</ul>
					</div>
				@endunless

				{!! $article->body !!}

				<div class="author">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="/img/avatar.svg" alt="avatar">
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Muhammad John Doe</h4>
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tecto beatae vitae dicta eiusmod tempor incididunt ut labore et dolore magn sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<h4>Sidebar</h4>
			</div>
		</div>

	</div>
</section>

</div>

@endsection
