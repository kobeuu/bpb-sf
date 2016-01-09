@extends('admin')

@section('page_title', 'Edit Artikel')

@section('content')

	{!! Form::model($new, ['method' => 'PATCH', 'action' => ['NewsController@update', $new->id], 'files' => true]) !!}
		@include('news.form', ['submitButtonText' => 'Update'])
	{!! Form::close() !!}

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
