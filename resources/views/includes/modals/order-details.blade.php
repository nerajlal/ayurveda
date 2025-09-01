<!-- Order Details Modal -->
<div id="orderDetailsModal" class="fixed inset-0 modal-backdrop z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div id="orderDetailsContent" class="p-8">
            <!-- Dynamic content will be injected here -->
            <div class="text-center">
                <p>Loading order details...</p>
            </div>
        </div>
    </div>
</div>

<script>
    function closeOrderDetailsModal() {
        const modal = document.getElementById('orderDetailsModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    async function openOrderDetailsModal(orderId) {
        const modal = document.getElementById('orderDetailsModal');
        const contentDiv = document.getElementById('orderDetailsContent');

        // Show modal with loading state
        contentDiv.innerHTML = '<p class="text-center">Loading order details...</p>';
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';

        try {
            const response = await fetch(`/orders/${orderId}`);
            if (!response.ok) {
                throw new Error('Failed to fetch order details.');
            }
            const order = await response.json();

            // Date formatting
            const orderDate = new Date(order.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });

            // Status mapping
            const statuses = { 0: 'Pending', 1: 'Processing', 2: 'Shipped', 3: 'Delivered' };
            const statusText = statuses[order.status] || 'Unknown';

            let itemsHtml = '';
            order.items.forEach(item => {
                const imageUrl = item.product_size.product.images.find(img => img.is_primary)
                    ? `/images/${item.product_size.product.images.find(img => img.is_primary).image_path}`
                    : 'https://via.placeholder.com/80';

                itemsHtml += `
                    <div class="flex items-center space-x-4 py-3 border-b border-gray-100">
                        <img src="${imageUrl}" alt="${item.product_size.product.name}" class="w-16 h-16 rounded-lg object-cover">
                        <div class="flex-grow">
                            <p class="font-semibold text-ayur-green">${item.product_size.product.name}</p>
                            <p class="text-sm text-ayur-brown">${item.product_size.size}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-ayur-brown">${item.quantity} x ₹${parseFloat(item.price).toFixed(2)}</p>
                            <p class="font-semibold text-ayur-green">₹${(item.quantity * item.price).toFixed(2)}</p>
                        </div>
                    </div>
                `;
            });

            const modalHtml = `
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Order Details</h2>
                        <p class="text-ayur-brown">Order #${order.id} &bull; <span class="text-ayur-gold font-medium">${statusText}</span></p>
                    </div>
                    <button onclick="closeOrderDetailsModal()" class="text-ayur-brown hover:text-ayur-green transition duration-300">&times;</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                    <div>
                        <h4 class="font-semibold text-ayur-green mb-2">Order Date</h4>
                        <p class="text-ayur-brown">${orderDate}</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-ayur-green mb-2">Shipping Address</h4>
                        <address class="text-ayur-brown not-italic">
                            ${order.shipping_address_line_1}<br>
                            ${order.shipping_address_line_2 ? order.shipping_address_line_2 + '<br>' : ''}
                            ${order.shipping_city}, ${order.shipping_state} ${order.shipping_postal_code}<br>
                            ${order.shipping_country}<br>
                            Ph: ${order.shipping_phone_number || 'N/A'}
                        </address>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold text-ayur-green mb-2">Order Items</h4>
                    <div class="border border-gray-200 rounded-lg p-4">
                        ${itemsHtml}
                        <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                            <div class="text-right">
                                <p class="text-ayur-brown">Total Amount:</p>
                                <p class="font-bold text-xl text-ayur-green">₹${parseFloat(order.total_amount).toFixed(2)}</p>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            contentDiv.innerHTML = modalHtml;

        } catch (error) {
            console.error('Error fetching order details:', error);
            contentDiv.innerHTML = '<p class="text-center text-red-500">Could not load order details. Please try again later.</p>';
        }
    }
</script>
