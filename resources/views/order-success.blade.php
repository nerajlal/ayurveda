@include('includes.header')

<div class="container mx-auto px-4 py-16 text-center">
    <div class="text-6xl mb-4 text-ayur-green">
        <i class="fas fa-check-circle"></i>
    </div>
    <h1 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Thank You for Your Order!</h1>
    <p class="text-ayur-brown text-lg mb-8">Your order has been placed successfully. Your order number is #{{ $order->id }}.</p>
    <p class="text-ayur-brown mb-8">We have sent a confirmation email to you. You can track your order status in the 'My Orders' section.</p>
    <div class="space-x-4">
        <a href="{{ route('products.index') }}" class="bg-ayur-green text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
            Continue Shopping
        </a>
        <a href="#" class="border border-ayur-green text-ayur-green px-8 py-3 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 font-medium">
            View Order Details
        </a>
    </div>
</div>

@include('includes.footer')
