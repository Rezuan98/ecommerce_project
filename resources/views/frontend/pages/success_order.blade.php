@extends('frontend.master.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card shadow-sm border-success">
                <div class="card-header text-center bg-success text-white">
                    <h4>Order Successful!</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        <strong>Thank you for your purchase!</strong><br>
                        Your order has been successfully placed and is being processed.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('index') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
