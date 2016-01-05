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

<div class="col-lg-6 col-xs-12">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-yellow">
      <div class="widget-user-image">
      @if (count(Auth::user()->avatar) > 0)
        <img class="img-circle" src="{{ URL('/uploads/avatar/'. Auth::user()->avatar) }}" alt="User Avatar">
      @else
        <img class="img-circle" src="{{ asset('/img/avatar.svg') }}" alt='User Avatar'>
      @endif
      </div><!-- /.widget-user-image -->
      <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
      <h5 class="widget-user-desc">{{ Auth::user()->universitas }}</h5>
    </div>
    <div class="box-footer">
      {{ Auth::user()->profil }}
    </div>
  </div><!-- /.widget-user -->
</div><!-- /.col -->

@endsection

@section('script')
	$(function () {
        $(".textarea").wysihtml5();
    });
@endsection
