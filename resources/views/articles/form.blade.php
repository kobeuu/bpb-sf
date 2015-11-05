<div class="col-md-9">

	<div class="box">
		<div class="box-body">
			<div class="form-group">
				{!! Form::text('title', null, ['class' => 'form-control', 'style' => 'font-size: 18px; padding: 14px;', 'placeholder' => 'Enter title here']) !!}
			</div>
			<span class="pad">
			<div class="form-group">
				{!! Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'style' => 'width: 100%; height: 220px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('excerpt', 'Excerpt (maks : 30 word) :') !!}
				{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'style' => 'width: 100%; height: 60px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
			</div>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="box">
		<div class="box-body">

			<div class="form-group">
				{!! Form::label('published_at', 'Publish On:') !!}
				{!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tag_list', 'Tags:') !!}
				{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tag_list', 'Featured Image:') !!}
				{!! Form::file('image', ['class' => 'form-control']) !!}
			</div>

		</div>

		<div class="box-footer">

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			</div>

		</div>

	</div>

</div>
