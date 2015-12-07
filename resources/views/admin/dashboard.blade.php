@extends('admin')

@section('page_title', 'Dashboard')

@section('content')
<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>{{$articles->count()}}</h3>
      <p>Total Artikel</p>
    </div>
    <div class="icon">
      <i class="ion ion-document-text"></i>
    </div>
    <a href="/articles/admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{$registrants->count()}}</h3>
      <p>Total Pendaftar</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="/registrants/admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ $messages->count() }}</h3>
      <p>Pesan Masuk</p>
    </div>
    <div class="icon">
      <i class="ion ion-email"></i>
    </div>
    <a href="/messages/admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ $messages->count() }}</h3>
      <p>Pesan Masuk</p>
    </div>
    <div class="icon">
      <i class="ion ion-email"></i>
    </div>
    <a href="/messages/admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<div class="col-lg-6">
  <!-- quick email widget -->
  <div class="box box-info">
    <div class="box-header">
      <i class="fa fa-envelope"></i>
      <h3 class="box-title">Quick Email</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div><!-- /. tools -->
    </div>
    <div class="box-body">
      <form action="#" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="emailto" placeholder="Email to:">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        <div>
          <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </form>
    </div>
    <div class="box-footer clearfix">
      <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
    </div>
  </div>
</div>

<div class="col-lg-6">
  <!-- quick email widget -->
  <div class="box box-info">
    <div class="box-header">
      <i class="fa fa-envelope"></i>
      <h3 class="box-title">Quick Email</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div><!-- /. tools -->
    </div>
    <div class="box-body">
      <form action="#" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="emailto" placeholder="Email to:">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        <div>
          <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </form>
    </div>
    <div class="box-footer clearfix">
      <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
    </div>
  </div>
</div>

@endsection

@section('script')
	$(function () {
        $(".textarea").wysihtml5();
    });
@endsection
