<!DOCTYPE html>
<html>
<head>
    <title>New Order Notification</title>
</head>
<body>
    <h1>New Order Placed</h1>
    <p>Dear Admin,</p>
    <p>A new order has been placed.</p>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->name }}</p>
    <p><strong>Total Amount:</strong> ${{ $order->total_amount }}</p>
    <p><strong>Order Items:</strong>{{ $order->shipping_address }}</p>
    
    <p>Thank you!</p>
</body>
</html>
