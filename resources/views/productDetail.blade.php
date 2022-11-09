@extends('home')
@section('content')
<div class="container" style="margin-bottom: 7%;" >
  <div class="row ">
    <div class="col-sm-6">
      <img class="pDetail-img" src="{{$product['gallary']}}" alt="">
    </div>

    <div class="col-sm-6 pt-3">
      <a href="/">GO back</a>
      <h3>Name: {{$product['name']}}</h3>
      <h3>Price: {{$product['price']}}</h3>
      <h5>Category: {{$product['category']}}</h5>
      <h5>Details: {{$product['description']}}</h5>
      <br><br>
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-success">Add to Cart</button>
      </form>
      <br>
      <button class="btn btn-primary">Buy Now </button>
    </div>
  </div>

</div>


@endsection