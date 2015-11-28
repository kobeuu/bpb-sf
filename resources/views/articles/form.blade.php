<div class="col-md-12">
	@include('errors.admin')
</div>

<div class="col-md-9">
	<div class="box">
		<div class="box-header">
      <h3 class="box-title">Artikel</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
      </div><!-- /. tools -->
    </div><!-- /.box-header -->
		<div class="box-body pad">

			<div class="form-group">
				{!! Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Masukan Judul Artikel']) !!}
			</div>
			<div class="form-group">
				{!! Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'style' => 'width: 100%; height: 320px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
			</div>
			<div class="form-group">
				{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'style' => 'width: 100%; height: 60px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;', 'placeholder' => 'Rangkuman artikel, maksimal 30 kata']) !!}
			</div>
		</div>
	</div>


</div>

<div class="col-md-3">
	<div class="box">
		<div class="box-header">
      <h3 class="box-title">Pilihan</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
      </div><!-- /. tools -->
    </div><!-- /.box-header -->
		<div class="box-body">

			<div class="form-group">
				{!! Form::label('published_at', 'Diterbitkan pada') !!}
				{!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tag_list', 'Kategori') !!}
				{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tag_list', 'Gambar Istimewa') !!}

				@if (count($article->image) > 0)
					<img class="media-object img-responsive" src="{{ url('uploads/images', $article->image) }}">
				@else
					{!! Form::file('image', null, ['class' => 'form-control']) !!}
				@endif

			</div>

		</div>

		<div class="box-footer">

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			</div>

		</div>

	</div>

</div>
