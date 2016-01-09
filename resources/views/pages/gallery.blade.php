@extends('main')

@section('judul-halaman', 'Gallery Aktivitas')

@section('meta')
<meta name="description" content="Beasiswa Pemimpin Bangsa Sinergi Foundation" />
    <meta name="keywords" content="beasiswa pemimpin bangsa, bpb, sinergi foundation" />
@endsection

@section('meta')
  <meta name="description" content="Blueprint: Blueprint: Google Grid Gallery" />
  <meta name="keywords" content="google getting started gallery, image gallery, image grid, template, masonry" />
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="{{ asset ("GridGallery/css/demo.css") }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset ("GridGallery/css/component.css") }}" />
  <script src="{{ asset ("GridGallery/js/modernizr.custom.js") }}"></script>
@endsection

@section('script')
  <script src="{{ asset ("GridGallery/js/imagesloaded.pkgd.min.js") }}"></script>
  <script src="{{ asset ("GridGallery/js/masonry.pkgd.min.js") }}"></script>
  <script src="{{ asset ("GridGallery/js/classie.js") }}"></script>
  <script src="{{ asset ("GridGallery/js/cbpGridGallery.js") }}"></script>
  <script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
  </script>
@endsection

@section('content')

@include('partials.title')

<section id="gallery">
  <div class="container">
    <div id="grid-gallery" class="grid-gallery">
      <section class="grid-wrap">
        <ul class="grid">
        @foreach ($images as $image)
          <li class="grid-sizer"></li><!-- for Masonry column width -->
          <li>
            <figure>
              <img src="{{ url('uploads/gallery', $image->file) }}" alt="{{ $image->title }}">
              <figcaption><h3>{{ $image->title }}</h3><p>{{ $image->caption }}</p></figcaption>
            </figure>
          </li>
          @endforeach
        </ul>
      </section><!-- // grid-wrap -->
      <section class="slideshow">
        <ul>
        @foreach ($images as $image)
          <li>
            <figure>
              <figcaption>
                <h3>{{ $image->title }}</h3>
                <p>{{ $image->caption }}</p>
              </figcaption>
              <img src="{{ url('uploads/gallery', $image->file) }}" alt="{{ $image->title }}">
            </figure>
          </li>
          @endforeach
        </ul>
        
        <nav>
          <span class="icon nav-prev"></span>
          <span class="icon nav-next"></span>
          <span class="icon nav-close"></span>
        </nav>
        <div class="info-keys icon">Navigate with arrow keys</div>
      </section><!-- // slideshow -->
    </div><!-- // grid-gallery -->
  </div>
</section>

@endsection
