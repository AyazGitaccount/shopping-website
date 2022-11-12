@extends('home')
@section('content')

<!-- this orders list-->
<div class="trending-section" style="height: 100vh;">

    <div style="margin-left: 10px;">
        <h3>orders List</h3>
        @foreach($orders as $item)
        <div style="border-bottom: 3px solid grey;margin: 15px;color: black;">
            <a href="detail/{{$item->id}}" style="text-decoration: none;">
                <img style="width:20%; height:20% " class="img-thumbnail" src="{{$item->gallary}}" alt="image">
            </a>
            <div class="col-sm-3">
                <h5>{{$item->name}}</h5>
                <h5>{{$item->order_status}}</h5>
            </div>
        </div>

    </div>
    @endforeach
</div>

@endsection