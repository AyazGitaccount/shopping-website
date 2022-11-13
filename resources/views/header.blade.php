<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (session()->has('user')) {
  $total = ProductController::cartitem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">shoping.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="orders">Orders</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="/cart_list">Cart({{$total}})</a>
        </li>
      </ul>
      <form action="/search" class="d-flex">
        <input class="form-control me-2" name="query" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success mx-2" type="submit">Search</button>
        @if(session()->has('user'))
        {
        <a class="btn btn-outline-success" href="/logout" role="button">Logout</a>
        }
        @else{
        <a class="btn btn-outline-success" href="/home-loginpage" role="button">Login</a>
        <a class="btn btn-outline-success mx-2" href="/signup" role="button">signup</a> }

        }
        @endif
      </form>

    </div>
  </div>
</nav>