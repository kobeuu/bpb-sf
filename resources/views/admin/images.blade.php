@extends('admin')

@section('page_title', 'Image Galleries')

@section('content')
<div class="col-md-12">
  @include('partials.flash')
</div>

<div class="col-md-3">
	<div class="box">
		<div class="box-body">

			{!! Form::model($image = new App\Image ,['url' => 'images', 'files' => true]) !!}

				<div class="form-group">
						{!! Form::label('Title') !!}
						{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
				</div>
				<div class="form-group">
			      {!! Form::label('File') !!}
			      {!! Form::file('file', null, ['class' => 'form-control']) !!}
			  </div>

		    <div class="form-group">
		        {!! Form::label('Caption') !!}
		        {!! Form::textarea('caption', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'rows' => '2']) !!}
		    </div>

		    <button type="submit" class="btn btn-primary btn-block">Tambah</button>

				{!! Form::close() !!}

		</div>

    <div class="box-footer">
      @include('errors.list')
    </div>

	</div>
</div>

@foreach ($images as $image)
<div class="col-md-3">
  <div class="box">
    <div class="box-body">
      <img src="{{ url('uploads/gallery', $image->file) }}" alt="{{ $image->title }}" class="img-responsive">
      <h3>{{ $image->title }}</h3>
      <p>{{ $image->caption }}</p>
      {!! Form::open(['url' => route('images.destroy', $image->id), 'method' => 'delete']) !!}
        <button type="submit" class="btn btn-xs btn-danger">hapus</button>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endforeach

@endsection
