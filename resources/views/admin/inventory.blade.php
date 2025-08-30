@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }

    /* Modal styles */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 50;
    }

    .modal-content {
        background-color: white;
        padding: 2.5rem;
        border-radius: 1rem;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        animation: fadeInScale 0.3s ease-out;
    }

    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Inventory Management</h2>
                <p class="text-ayur-brown mt-1">Track and manage your product stock levels in real-time.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                    <span class="text-lg">🔔</span>
                </button>
                <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                    + Add New Product
                </button>
            </div>
        </div>
    </div>

    <!-- Inventory Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Items in Stock</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">1,847</p>
                    <p class="text-green-600 text-sm mt-1">Across all products</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">📦</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Low Stock Alerts</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">4</p>
                    <p class="text-orange-600 text-sm mt-1">Needs attention</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <span class="text-orange-600 text-xl">⚠️</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Out of Stock</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">2</p>
                    <p class="text-red-600 text-sm mt-1">Urgent action required</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">⛔️</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Stock Value</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">₹3,47,500</p>
                    <p class="text-blue-600 text-sm mt-1">Based on current pricing</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">💰</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Inventory List and Filters -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center flex-wrap gap-4">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">Product Inventory</h3>
            <div class="flex items-center space-x-2 flex-grow sm:flex-grow-0">
                <input type="text" placeholder="Search products..." class="flex-grow border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                <select class="border border-gray-300 rounded-md px-3 py-2 text-sm text-ayur-brown focus:outline-none focus:ring-1 focus:ring-ayur-green">
                    <option>Filter by Status</option>
                    <option>In Stock</option>
                    <option>Low Stock</option>
                    <option>Out of Stock</option>
                </select>
                <button class="bg-gray-100 p-2 rounded-md text-ayur-brown hover:bg-gray-200 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 9.414V17a1 1 0 01-1.485.876l-3-2A1 1 0 017 15V9.414L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full min-w-max">
                    <thead>
                        <tr class="text-left border-b border-gray-100">
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">SKU</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Category</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Current Stock</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Low Stock Threshold</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">Brahmi Hair Oil</td>
                            <td class="py-3 text-sm text-ayur-brown">BR-HO-01</td>
                            <td class="py-3 text-sm text-ayur-brown">Hair Care</td>
                            <td class="py-3 text-sm text-ayur-brown">45</td>
                            <td class="py-3 text-sm text-ayur-brown">10</td>
                            <td class="py-3">
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">In Stock</span>
                            </td>
                            <td class="py-3">
                                <button onclick="showUpdateStockModal('Brahmi Hair Oil', 45)" class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Update Stock</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">Immunity Tea Blend</td>
                            <td class="py-3 text-sm text-ayur-brown">ITB-02</td>
                            <td class="py-3 text-sm text-ayur-brown">Wellness Teas</td>
                            <td class="py-3 text-sm text-ayur-brown">7</td>
                            <td class="py-3 text-sm text-ayur-brown">10</td>
                            <td class="py-3">
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-full font-medium">Low Stock</span>
                            </td>
                            <td class="py-3">
                                <button onclick="showUpdateStockModal('Immunity Tea Blend', 7)" class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Update Stock</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">Triphala Churna</td>
                            <td class="py-3 text-sm text-ayur-brown">TRP-CHU-03</td>
                            <td class="py-3 text-sm text-ayur-brown">Digestion</td>
                            <td class="py-3 text-sm text-ayur-brown">2</td>
                            <td class="py-3 text-sm text-ayur-brown">5</td>
                            <td class="py-3">
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-full font-medium">Low Stock</span>
                            </td>
                            <td class="py-3">
                                <button onclick="showUpdateStockModal('Triphala Churna', 2)" class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Update Stock</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">Neem Face Pack</td>
                            <td class="py-3 text-sm text-ayur-brown">NFP-04</td>
                            <td class="py-3 text-sm text-ayur-brown">Skin Care</td>
                            <td class="py-3 text-sm text-ayur-brown">0</td>
                            <td class="py-3 text-sm text-ayur-brown">5</td>
                            <td class="py-3">
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full font-medium">Out of Stock</span>
                            </td>
                            <td class="py-3">
                                <button onclick="showUpdateStockModal('Neem Face Pack', 0)" class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Update Stock</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Update Stock Modal -->
<div id="update-stock-modal" class="modal-overlay hidden">
    <div class="modal-content">
        <div class="flex justify-between items-start mb-4">
            <h3 class="font-playfair text-2xl font-bold text-ayur-green">Update Stock</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="text-ayur-brown space-y-4">
            <p id="modal-product-name" class="font-medium text-lg"></p>
            <div>
                <label for="stock-level" class="block text-sm font-medium text-ayur-brown">New Stock Level</label>
                <input type="number" id="stock-level" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-ayur-green focus:border-ayur-green">
            </div>
            <div class="flex justify-end mt-4">
                <button onclick="closeModal()" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mr-2 hover:bg-gray-300">Cancel</button>
                <button onclick="saveStock()" class="bg-ayur-green text-white px-4 py-2 rounded-md hover:bg-ayur-dark">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    let currentProduct = null;

    function showUpdateStockModal(productName, currentStock) {
        currentProduct = productName;
        document.getElementById('modal-product-name').innerText = `Product: ${productName}`;
        document.getElementById('stock-level').value = currentStock;
        document.getElementById('update-stock-modal').classList.remove('hidden');
    }

    function saveStock() {
        const newStock = document.getElementById('stock-level').value;
        // In a real application, you would send this data to a backend API to update the inventory.
        console.log(`Updating stock for ${currentProduct} to ${newStock}`);
        closeModal();
    }

    function closeModal() {
        document.getElementById('update-stock-modal').classList.add('hidden');
    }

    // Close modal when clicking outside of it
    document.getElementById('update-stock-modal').addEventListener('click', (e) => {
        if (e.target.id === 'update-stock-modal') {
            closeModal();
        }
    });
</script>
    
@include('admin.includes.footer')
