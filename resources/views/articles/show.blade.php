@extends('main')

@section('content')
<div class="container">
<section id="content">

	<h1> {{ $article->title }} </h1>
	<p> {!! $article->body !!} </p>

	@unless ($article->tags->isEmpty())
		<h5>Tags :</h5>
		<ul>
			@foreach ($article->tags as $tag)
				<li> {{ $tag->name }} </li>
			@endforeach
		</ul>
	@endunless
	
</section>
</div>

@endsection