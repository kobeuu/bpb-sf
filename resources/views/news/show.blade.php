@extends('main')

@section('judul-halaman', 'Berita Aktivitas')

@section('content')

@include('partials.title')

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="heading-post">{{ $new->title }}</h2>

				<div class="tags">
					<ul>
						<span class="meta-post">Published on {{ $new->published_at }} | Writen by Admin - Sinergi Foundation
						</span>
					</ul>
				</div>

				<div class="thumbnail">
					<img src="/uploads/images/{{ $new->image }}"  height="500" width="720" alt="">
				</div>

				{!! $new->body !!}

			</div>

			<div class="col-md-4">
				@include('partials.sidebar')
		</div>

	</div>
</section>

</div>

@endsection
