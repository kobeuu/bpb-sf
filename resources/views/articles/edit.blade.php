@extends('admin')

@section('page_title', 'Edit Artikel')

@section('content')

	{!! Form::model($article , ['method' => 'PATCH', 'action' => ['ArticlesController@update' , $article->id], 'files' => true]) !!}
		@include('articles.form', ['submitButtonText' => 'Update'])
	{!! Form::close() !!}

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
