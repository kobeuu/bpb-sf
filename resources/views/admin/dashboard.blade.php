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
<!-- <div class="col-lg-3 col-xs-6">
  <div class="small-box bg-green">
    <div class="inner">
      <h3>156</h3>
      <p>Total Donatur</p>
    </div>
    <div class="icon">
      <i class="ion ion-card"></i>
    </div>
    <a href="/donors/admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div> -->
@endsection
