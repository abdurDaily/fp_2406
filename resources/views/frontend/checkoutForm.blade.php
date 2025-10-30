@extends('frontend.layout')
@section('frontend_content')
<div class="container">
    <div class="card">
        <div class="row  p-5 my-5">

            <div class="card-header">
                <p>for confirming you order please provide your details information</p>
            </div>

            <div class="col-lg-4">
                <form action="" method="post" class="mt-4">
                    @csrf

                    <label for="name">Name</label>
                    <input type="text" placeholder="your name" class="form-control p-3 mb-2" id="name">


                    <label for="email">email</label>
                    <input type="email" placeholder="your email" class="form-control p-3 mb-2" id="email">

                    <label for="phone">Phone Number</label>
                    <input type="text" placeholder="your phone number" class="form-control p-3 mb-2" id="phone">

                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control"
                        placeholder="provide your address"></textarea>
                    <button class="p-3 btn btn-success w-100 mt-3">Confirm Order</button>


                </form>
            </div>


            <div class="col-lg-8 mt-3">
                <p class="text-end">Your Order Summary</p>

                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>Products Title</td>
                        <td>Total</td>
                        <td>Action</td>
                    </tr>
                    @foreach (session('cart', []) as $key => $cart)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cart['title'] }}</td>
                            <td> {{ $cart['price'] }} * {{ $cart['qty'] }} = {{ $cart['price'] * $cart['qty'] }} /- </td>
                            <td><a href="{{ route('delete.cart',$key) }}" class="btn btn-outline-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>


        </div>

    </div>
</div>
@endsection