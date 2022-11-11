@extends('home')
@section('content')

<!-- this is slider 2 -->
<div class=" mycss  ml-5">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach($products as $item)
      <div class="carousel-item {{$item['id']==2?'active':''}} ">
        <a href="detail/{{$item['id']}}">
          <img style="height: 400px;width:60%" src="{{$item['gallary']}}" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev my-2" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next "  type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>
<div class="trending-section">
  <h3>trending items</h3>
  @foreach($products as $item)
  <!-- <div class="trending-item"> -->
  <a href="detail/{{$item['id']}}">
    <img id="trending-img" class="img-thumbnail" src="{{$item['gallary']}}" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <!-- <h5>{{$item['name']}}</h5> -->
    </div>
  </a>
  </di /v>
  @endforeach
</div>
</div>
</div>

@endsection