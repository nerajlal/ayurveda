@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }

    /* Inline edit states */
    .edit-mode-stock .view-mode-stock { display: none; }
    .edit-mode-price .view-mode-price { display: none; }
    .view-mode-stock .edit-mode-stock { display: none; }
    .view-mode-price .edit-mode-price { display: none; }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Inventory Management</h2>
                <p class="text-ayur-brown mt-1">Track and manage your product stock levels and status.</p>
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
                    <p class="text-ayur-brown text-sm font-medium">Total Active Products</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">104</p>
                    <p class="text-green-600 text-sm mt-1">Visible to customers</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">✅</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Inactive Products</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">24</p>
                    <p class="text-red-600 text-sm mt-1">Hidden from store</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">🚫</span>
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

    <!-- Inventory List -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center flex-wrap gap-4">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">Product Inventory</h3>
            <div class="flex items-center space-x-2 flex-grow sm:flex-grow-0">
                <input type="text" placeholder="Search products..." class="flex-grow border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                <select class="border border-gray-300 rounded-md px-3 py-2 text-sm text-ayur-brown focus:outline-none focus:ring-1 focus:ring-ayur-green">
                    <option>Filter by Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
                <button class="bg-gray-100 p-2 rounded-md text-ayur-brown hover:bg-gray-200 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 9.414V17a1 1 0 01-1.485.876l-3-2A1 1 0 017 15V9.414L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="p-6 overflow-x-auto">
            <table class="w-full min-w-max">
                <thead>
                    <tr class="text-left border-b border-gray-100">
                        <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                        <th class="pb-3 text-sm font-medium text-ayur-brown">SKU</th>
                        <th class="pb-3 text-sm font-medium text-ayur-brown">Category</th>
                        <th class="pb-3 text-sm font-medium text-ayur-brown">Current Stock</th>
                        <th class="pb-3 text-sm font-medium text-ayur-brown">Price</th>
                        <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Product Row -->
                    <tr class="table-hover">
                        <td class="py-3 text-sm font-medium text-ayur-green">Brahmi Hair Oil</td>
                        <td class="py-3 text-sm text-ayur-brown">BR-HO-01</td>
                        <td class="py-3 text-sm text-ayur-brown">Hair Care</td>
                        <td class="py-3 text-sm text-ayur-brown">45</td>
                        <td class="py-3 text-sm text-ayur-brown">₹899</td>
                        <td class="py-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="w-14 h-8 bg-red-500 rounded-full peer-checked:bg-green-500 transition-colors duration-300"></div>
                                <div class="absolute left-1 top-1 w-6 h-6 bg-white rounded-full transition-transform duration-300 peer-checked:translate-x-6"></div>
                            </label>
                        </td>
                    </tr>

                    <tr class="table-hover">
                        <td class="py-3 text-sm font-medium text-ayur-green">Neem Face Pack</td>
                        <td class="py-3 text-sm text-ayur-brown">NFP-04</td>
                        <td class="py-3 text-sm text-ayur-brown">Skin Care</td>
                        <td class="py-3 text-sm text-ayur-brown">0</td>
                        <td class="py-3 text-sm text-ayur-brown">₹299</td>
                        <td class="py-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-14 h-8 bg-red-500 rounded-full peer-checked:bg-green-500 transition-colors duration-300"></div>
                                <div class="absolute left-1 top-1 w-6 h-6 bg-white rounded-full transition-transform duration-300 peer-checked:translate-x-6"></div>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.includes.footer')
