@extends('admin')

@section('page_title', 'Tambah Artikel Baru')

@section('content')

	{!! Form::model($article = new App\Article, ['url' => 'articles', 'files' => true]) !!}
		@include('articles.form', ['submitButtonText' => 'Add Article'])
	{!! Form::close() !!}

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
