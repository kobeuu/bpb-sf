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

			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
				{!! Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Masukan Judul Artikel']) !!}
				@if ($errors->has('title'))
                <span class="help-block">
                  <strong>{{ $errors->first('title') }}</strong>
                </span>
              	@endif
			</div>
			<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
				{!! Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'style' => 'width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
				@if ($errors->has('body'))
                <span class="help-block">
                  <strong>{{ $errors->first('body') }}</strong>
                </span>
              	@endif
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

			<div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
				{!! Form::label('published_at', 'Diterbitkan pada') !!}
				{!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
				@if ($errors->has('published_at'))
                <span class="help-block">
                  <strong>{{ $errors->first('published_at') }}</strong>
                </span>
              	@endif
			</div>

			{!! Form::label('tag_list', 'Kategori') !!}
			<div class="form-group{{ $errors->has('tag_list') ? ' has-error' : '' }}">
				{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
				@if ($errors->has('tag_list'))
                <span class="help-block">
                  <strong>{{ $errors->first('tag_list') }}</strong>
                </span>
              	@endif
			</div>

			<div class="form-group">
				{!! Form::label('image', 'Gambar Istimewa') !!}
				@if (count($article->image) > 0)
					<img class="media-object img-responsive" src="{{ url('uploads/images', $article->image) }}">
				@endif	
			</div>

			<div class="form-group">
				{!! Form::file('image', null, ['class' => 'form-control']) !!}
			</div>

		</div>

		<div class="box-footer">

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			</div>

		</div>

	</div>

</div>
