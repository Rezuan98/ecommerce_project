@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-top: 100px;margin-left:100px;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Order Details</h4>
                </div>

                <!-- Form for Updating Order Status -->
                <div class="card-body">
                    <form action="{{ route('update.order.status',$order->id) }}" method="POST" class="mb-4">
                        @csrf
                        <div class="d-flex align-items-center">
                            <select name="status" class="form-select form-select-sm me-2" required>
                                <option value="" disabled selected>Select Order Status</option>
                                <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            <button type="submit" class="btn btn-warning btn-sm">Update Status</button>
                        </div>
                    </form>

                    <!-- Order Details Table -->
                    @if($get_order->isEmpty())
                        <div class="alert alert-warning" role="alert">
                            No items found for this order.
                        </div>
                    @else
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($get_order as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->product->name ?? 'No product name' }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->size ?? 'N/A' }}</td>
                                        <td>{{ $item->quantity * $item->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('order.show') }}" class="btn btn-secondary">Back to Orders</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
