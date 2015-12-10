@extends('admin')

@section('page_title', 'Edit Artikel')

@section('content')

	{!! Form::model($new , ['method' => 'PATCH', 'action' => ['NewssController@update' , $new->id]]) !!}
		@include('news.form', ['submitButtonText' => 'Update'])
	{!! Form::close() !!}

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
