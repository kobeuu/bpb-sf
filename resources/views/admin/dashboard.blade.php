@extends('admin')

@section('page_title', 'Dashboard')

@section('content')

@if( ! Auth::user()->admin)
  @include('partials.info')
@endif

<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>{{ $count['articles'] }}</h3>
      <p>Total Artikel</p>
    </div>
    <div class="icon">
      <i class="ion ion-document-text"></i>
    </div>
    <a href="/dashboard/articles" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

@if(Auth::user()->admin)
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{ $count['registrants'] }}</h3>
      <p>Total Pendaftar</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="/dashboard/registrants" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3>{{ $count['users'] }}</h3>
      <p>Pengguna</p>
    </div>
    <div class="icon">
      <i class="ion ion-email"></i>
    </div>
    <a href="/dashboard/messages" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ $count['messages'] }}</h3>
      <p>Pesan Masuk</p>
    </div>
    <div class="icon">
      <i class="ion ion-email"></i>
    </div>
    <a href="/dashboard/messages" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

@endif

@endsection

@section('script')
	$(function () {
        $(".textarea").wysihtml5();
    });
@endsection
