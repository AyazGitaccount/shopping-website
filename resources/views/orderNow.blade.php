@extends('home')
@section('content')

<div class="trending-section" style="height: 100vh;">
    <div class="col-sm-6">
        <table class="table table-striped">
            <!-- <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Price</th>
                <th scope="col">Tax</th>
                <th scope="col">Delivery charges</th>
                <th scope="col">Total amount</th>
            </tr>
        </thead> -->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Price</td>
                    <td>Rs.{{$total}}</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Tax</td>
                    <td>Rs.0</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Delivery charges</td>
                    <td>Rs.200</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td class="fw-bold">Sub Total</td>
                    <td class="fw-bold">Rs.{{$total+200}}</td>
                </tr>

            </tbody>
        </table><br>
        <form action="/orderPlace" method="POST">
            @csrf
            <div class="mb-3">
                <h5>Shipping address</h5>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="address"  placeholder="Enter Address" rows="3"></textarea>
            </div>
            <h5>Payment method</h5>
            <div class="form-check">
                <input class="form-check-input" value="CoD" type="radio" name="payment" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    CoD
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="credit card" type="radio" name="payment" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Credit card
                </label>
            </div><br>
            <button type="submit" class="btn btn-light btn-outline-info">Order Now</button>
        </form>
    </div>
</div>

@endsection