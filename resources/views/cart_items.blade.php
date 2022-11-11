@extends('home')
@section('content')

<!-- this cart items list-->
<div class="trending-section" style="height: 100vh;">

    <div style="margin-left: 10px;">
        <h3>Cart List</h3>
        <a href="order" class="btn btn-success">Order Now</a>
        @foreach($_product as $item)
        <div style="border-bottom: 3px solid grey;margin: 15px;">
            <a href="detail/{{$item->id}}">
                <img style="width:20%; height:20% " class="img-thumbnail" src="{{$item->gallary}}" alt="image">
                <h5>{{$item->name}}</h5>
                <h5>{{$item->price}}</h5>
            </a>
            <a href="removeitem/{{$item->cart_id}}" type="button" class="btn btn-warning">Remove from Crat</a>
        </div>

    </div>
    @endforeach
</div>

@endsection