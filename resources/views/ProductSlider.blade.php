@extends('home')
@section('content')

<!-- <div class=" mycss  ml-5">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img style="height: 400px;" src="https://image.coolblue.nl/840x473/content/eaffe0557c19ecb8c8cfaa22fea4fdef" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="height: 400px;" src="https://fdn2.gsmarena.com/vv/pics/huawei/huawei-p30-pro-2.jpg" alt="crypto" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="height: 400px;" src="https://www.thrift.pk/images/thumbnails-large/image-2021-05-21-225748-2105-642476-210521055745.png" class="d-block w-100" alt="...">
      </div>
    

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
</div> -->

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
          <img style="height: 400px;width:70%" src="{{$item['gallary']}}" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-section">
  <h3>trending items</h3>
  @foreach($products as $item)
  <!-- <div class=""> -->
    <a href="detail/{{$item['id']}}">
      <img id="trending-img" src="{{$item['gallary']}}" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
      </div>
    </a>
  <!-- </div> -->
  @endforeach
</div>
</div>
</div>

@endsection