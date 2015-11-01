@extends('admin')

@section('page_title', 'Edit Article')

@section('content')

		{!! Form::model($article , ['method' => 'PATCH', 'action' => ['ArticlesController@update' , $article->id]]) !!}
			@include('articles.form', ['submitButtonText' => 'Update'])
		{!! Form::close() !!}

	@include('errors.list')

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
