<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - Order #{{ $order->id }}</title>
    <style>
        body { font-family: 'Helvetica', sans-serif; font-size: 12px; color: #333; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .header, .footer { text-align: center; }
        .header h1 { font-size: 24px; margin: 0; }
        .details, .items, .summary { width: 100%; margin-top: 20px; }
        .details table, .items table, .summary table { width: 100%; border-collapse: collapse; }
        .details table td, .summary table td { padding: 5px; }
        .items table th, .items table td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .items table th { background-color: #f4f4f4; }
        .text-right { text-align: right; }
        .total { font-weight: bold; font-size: 14px; }
        .print-button { display: block; width: 150px; margin: 20px auto; padding: 10px; background-color: #4a7c59; color: #fff; text-align: center; text-decoration: none; border-radius: 5px; }
        @media print {
            .print-button { display: none; }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="javascript:window.print()" class="print-button">Print / Download PDF</a>

        <div class="header">
            <h1>AyurVeda Wellness Store</h1>
            <p>Invoice</p>
        </div>

        <div class="details">
            <table>
                <tr>
                    <td>
                        <strong>Order ID:</strong> #{{ $order->id }}<br>
                        <strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}<br>
                        <strong>Status:</strong>
                        @switch($order->status)
                            @case(0) Pending @break
                            @case(1) Processing @break
                            @case(2) Shipped @break
                            @case(3) Delivered @break
                            @default Unknown
                        @endswitch
                    </td>
                    <td class="text-right">
                        <strong>Billed To:</strong><br>
                        {{ $order->user->first_name }} {{ $order->user->last_name }}<br>
                        {{ $order->shipping_address_line_1 }}<br>
                        @if($order->shipping_address_line_2){{ $order->shipping_address_line_2 }}<br>@endif
                        {{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_postal_code }}<br>
                        {{ $order->shipping_country }}<br>
                        Ph: {{ $order->shipping_phone_number }}
                    </td>
                </tr>
            </table>
        </div>

        <div class="items">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->productSize->product->name }}</td>
                        <td>{{ $item->productSize->size }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>₹{{ number_format($item->price, 2) }}</td>
                        <td class="text-right">₹{{ number_format($item->quantity * $item->price, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="summary">
            <table align="right">
                <tr>
                    <td>Subtotal:</td>
                    <td class="text-right">₹{{ number_format($order->total_amount, 2) }}</td>
                </tr>
                <tr>
                    <td>Taxes:</td>
                    <td class="text-right">₹0.00</td>
                </tr>
                <tr class="total">
                    <td>Total:</td>
                    <td class="text-right">₹{{ number_format($order->total_amount, 2) }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>
</html>
