@extends('home')
@section('content')

<!-- this cart items list-->
<div class="trending-section" style="height: 100vh;">

    <div style="margin-left: 10px;">
        <h3>Cart List</h3>
        @foreach($_product as $item)
        <div style="border-bottom: 3px solid grey;margin: 15px;">
            <a href="detail/{{$item->id}}">
                <img style="width:20%; height:20% " class="img-thumbnail" src="{{$item->gallary}}" alt="...">
                <h5>{{$item->name}}</h5>
            </a>
            <button type="button" class="btn btn-warning">Remove from Crat</button>
        </div>

    </div>
    @endforeach
</div>

@endsection