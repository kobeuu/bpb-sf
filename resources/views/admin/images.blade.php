@extends('admin')

@section('page_title', 'Image Galleries')

@section('content')
<div class="col-md-9">
  <div class="box">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Caption</th>
					<th>Action</th>
        </tr>
        @foreach ($images as $image)
          <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->title}}</td>
            <td>{{ $image->caption }}</td>
            <td>
              <!-- <a href="/images/{{ $image->id }}/edit"><span class="btn btn-xs btn-primary">Edit</span></a> -->
              {!! Form::open(['url' => route('images.destroy', $image->id), 'method' => 'delete']) !!}
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div>
  </div><!-- /.box -->
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
			      {!! Form::file('file', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			  </div>

		    <div class="form-group">
		        {!! Form::label('Caption') !!}
		        {!! Form::textarea('caption', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'rows' => '2']) !!}
		    </div>

		    <button type="submit" class="btn btn-primary btn-block">Kirim</button>

				{!! Form::close() !!}


		</div>

    <div class="box-footer">
      @include('errors.list')
    </div>

	</div>

</div>

@endsection
