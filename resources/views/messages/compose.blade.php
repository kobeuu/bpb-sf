@extends('admin')

@section('page_title', 'Pesan')

@section('content')
<div class="col-md-12">
  <!-- quick email widget -->
  <div class="box box-info">
    <div class="box-header">
      <i class="fa fa-envelope"></i>
      <h3 class="box-title">Kirim Pesan</h3>
    </div>
    {!! Form::open(['url' => 'messages/compose']) !!}
    <div class="box-body">
        <div class="form-group">
          {!! Form::input('email', null, null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
        <div class="form-group">
          {!! Form::input('subject', null, null, ['class' => 'form-control', 'placeholder' => 'Subject']) !!}
        </div>
        <div>
          <textarea class="textarea" placeholder="Pesan" name="message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
    </div>
    <div class="box-footer clearfix">
      <button class="pull-right btn btn-default">Send <i class="fa fa-arrow-circle-right"></i></button>
    </div>
    {!! Form::close() !!}
  </div>
</div><!-- /.col -->
@endsection
