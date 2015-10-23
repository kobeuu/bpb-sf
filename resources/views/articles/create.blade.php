@extends('admin')

@section('page_title', 'Write a New Article')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-11">

			{!! Form::model($article = new App\Article ,['url' => 'articles']) !!}
				@include('articles.form', ['submitButtonText' => 'Add Article'])
			{!! Form::close() !!}

			@include('errors.list')
		</div>
	</div>
</div>

@endsection

@section('script')
	$(function () {
        $("textarea").wysihtml5();
    });
@endsection