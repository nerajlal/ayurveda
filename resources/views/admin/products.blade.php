@include('admin.includes.sidebar')

<div class="ml-64 p-6">
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Product Management</h2>
                <p class="text-ayur-brown mt-1">Manage your store's products, inventory, and listings.</p>
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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Products</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">128</p>
                    <p class="text-green-600 text-sm mt-1">+5 new this month</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">🌿</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Out of Stock</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">3</p>
                    <p class="text-red-600 text-sm mt-1">Action required</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">⚠️</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Hidden Products</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">7</p>
                    <p class="text-gray-600 text-sm mt-1">Not visible to customers</p>
                </div>
                <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                    <span class="text-gray-600 text-xl">🙈</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Top Selling</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">Brahmi Hair Oil</p>
                    <p class="text-blue-600 text-sm mt-1">345 units sold</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">⭐</span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 mb-8">
        <div class="bg-white rounded-xl card-shadow">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Products</h3>
                <div class="flex space-x-2">
                    <input type="text" placeholder="Search products..." class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                    <button class="bg-gray-100 p-2 rounded-md text-ayur-brown hover:bg-gray-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b border-gray-100">
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Category</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">SKU</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Price</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Stock</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="space-y-2">
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">Brahmi Hair Oil</td>
                                <td class="py-3 text-sm text-ayur-brown">Hair Care</td>
                                <td class="py-3 text-sm text-ayur-brown">BR-HO-01</td>
                                <td class="py-3 text-sm text-ayur-brown">₹899</td>
                                <td class="py-3 text-sm text-ayur-brown">45 in stock</td>
                                <td class="py-3">
                                    <span class="status-active text-white text-xs px-2 py-1 rounded-full">Active</span>
                                </td>
                                <td class="py-3">
                                    <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">Immunity Tea Blend</td>
                                <td class="py-3 text-sm text-ayur-brown">Wellness Teas</td>
                                <td class="py-3 text-sm text-ayur-brown">ITB-02</td>
                                <td class="py-3 text-sm text-ayur-brown">₹549</td>
                                <td class="py-3 text-sm text-ayur-brown">12 in stock</td>
                                <td class="py-3">
                                    <span class="status-active text-white text-xs px-2 py-1 rounded-full">Active</span>
                                </td>
                                <td class="py-3">
                                    <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">Triphala Churna</td>
                                <td class="py-3 text-sm text-ayur-brown">Digestion</td>
                                <td class="py-3 text-sm text-ayur-brown">TRP-CHU-03</td>
                                <td class="py-3 text-sm text-ayur-brown">₹399</td>
                                <td class="py-3 text-sm text-ayur-brown">2 in stock</td>
                                <td class="py-3">
                                    <span class="status-low-stock text-white text-xs px-2 py-1 rounded-full">Low Stock</span>
                                </td>
                                <td class="py-3">
                                    <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">Neem Face Pack</td>
                                <td class="py-3 text-sm text-ayur-brown">Skin Care</td>
                                <td class="py-3 text-sm text-ayur-brown">NFP-04</td>
                                <td class="py-3 text-sm text-ayur-brown">₹299</td>
                                <td class="py-3 text-sm text-ayur-brown">0 in stock</td>
                                <td class="py-3">
                                    <span class="status-out-of-stock text-white text-xs px-2 py-1 rounded-full">Out of Stock</span>
                                </td>
                                <td class="py-3">
                                    <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.includes.footer')