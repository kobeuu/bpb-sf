@extends('main')

@section('judul-halaman', 'Gallery Aktivitas')

@section('content')

@include('partials.title')

<section id="gallery">
  <div class="container">
    <div class="row">
      @foreach ($images as $image)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ url('uploads/gallery', $image->file) }}" alt="{{ $image->title }}">
            <div class="caption">
              <h3>{{ $image->title }}</h3>
              <p>{{ $image->caption }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
