@extends('admin')

@section('page_title', 'Slider')

@section('content')
<div class="col-md-12">
  @include('partials.flash')
</div>

<div class="col-md-3">
	<div class="box">
		<div class="box-body">

			{!! Form::model($slider = new App\Slider, ['url' => 'sliders', 'files' => true, 'enctype' => "multipart/form-data"]) !!}

			<div class="form-group">
				{!! Form::label('Nama') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
			</div>
			<div class="form-group">
		    	{!! Form::label('File') !!}
		    	{!! Form::file('file', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				Ukuran gambar : 1600x475px
			</div>

		    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
				{!! Form::close() !!}
		</div>

    <div class="box-footer">
      @include('errors.list')
    </div>

	</div>
</div>

@foreach ($sliders as $slider)
<div class="col-md-3">
  <div class="box">
    <div class="box-body">
      <img src="{{ url('uploads/sliders', $slider->file) }}" alt="{{ $slider->name }}" class="img-responsive">
      <h3>{{ $slider->name }}</h3>
      {!! Form::open(['url' => route('sliders.destroy', $slider->id), 'method' => 'delete']) !!}
        <button type="submit" class="btn btn-xs btn-danger">hapus</button>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endforeach

@endsection
