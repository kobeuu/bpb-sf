<!-- banner -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
  <div class="item active">
      <img src="uploads/sliders/main_slider.jpg" alt="slider utama">
    </div>
  @foreach ($sliders as $slider)
    <div class="item">
      <img src="{{ url('uploads/sliders', $slider->file) }}" alt="{{ $slider->name }}">
    </div>
  @endforeach
  </div>
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <!-- /#banner -->
