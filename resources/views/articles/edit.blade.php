@extends('admin')

@section('page_title', 'Edit Article')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-11">

				{!! Form::model($article , ['method' => 'PATCH', 'action' => ['ArticlesController@update' , $article->id]]) !!}
					@include('articles.form', ['submitButtonText' => 'Update Article'])
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	@include('errors.list')

@endsection

@section('script')
	$(function () {
        $("textarea").wysihtml5();
    });
@endsection