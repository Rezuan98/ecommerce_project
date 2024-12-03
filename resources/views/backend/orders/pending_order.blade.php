@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-top: 100px; margin-left:100px;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Orders</h4>
                    <!-- Dropdown for Bulk Order Status Update -->
                    <div class="d-flex align-items-center">
                        <select id="order-status-dropdown" class="form-select form-select-sm me-2" required>
                            <option value="" disabled selected>Select Order Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                        <button id="update-order-status" class="btn btn-info btn-sm">Update Selected Orders</button>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Select</th>
                                <th>SL</th>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Total Price</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pending_order as $key => $order)
                                <tr>
                                    <!-- Checkbox for Bulk Order Status Update -->
                                    <td>
                                        <input type="checkbox" class="order-checkbox" value="{{ $order->id }}">
                                    </td>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->name ?? 'No name' }}</td>
                                    <td>{{ $order->phone ?? 'No phone' }}</td>
                                    <td>{{ $order->total_amount ?? 'No amount' }}</td>
                                    <td>{{ $order->payment_method ?? 'No method' }}</td>
                                    <td>
                                        <!-- Individual Form for Payment Status Update -->
                                        <form action="{{ route('update.payment.status.single', $order->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <select name="payment_status" class="form-select form-select-sm" required>
                                                <option value="Pending" {{ $order->payment_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Completed" {{ $order->payment_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Failed" {{ $order->payment_status == 'Failed' ? 'selected' : '' }}>Failed</option>
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
                                        </form>
                                    </td>
                                    <td>{{ $order->status ?? 'No status' }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('order.details', $order->id) }}">View Details</a>
                                        <a class="btn btn-danger btn-sm mt-2" href="{{ route('delete.order', $order->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">No orders found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
  
</script>
@endsection
@endsection
