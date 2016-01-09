@extends('admin')

@section('page_title', 'Tambah Berita Baru')

@section('content')

	{!! Form::model($new = new App\News, ['url' => 'news', 'files' => true]) !!}
		@include('news.form', ['submitButtonText' => 'Tambah Berita'])
	{!! Form::close() !!}

@endsection

@section('script')
	$(function () {
        $("#body").wysihtml5();
				$('#tag_list').select2();
    });
@endsection
