@extends('home')
@section('content')

<!-- this is slider 2 -->
<div class="trending-section" style="height: 70vh;">
    <div class="col-sm-4">
    <a href="#">Filter</a>
    </div>
    <div>
        <h3>Search results</h3>
        @foreach($product as $item)
        <!-- <div class="trending-item"> -->
        <a href="detail/{{$item['id']}}">
            <img style="width:20%; height:20% " class="img-thumbnail" src="{{$item['gallary']}}" alt="...">
            <!-- <div class="carousel-caption d-none d-md-block"> -->
            <h5>{{$item['name']}}</h5>
            <!-- </div> -->
        </a>
    </div>
    @endforeach
</div>
</div>

@endsection