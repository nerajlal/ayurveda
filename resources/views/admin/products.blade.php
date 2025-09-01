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
                <button id="addProductBtn" class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
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
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $totalProducts }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">🌿</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Out of Stock Variants</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $outOfStockVariantsCount }}</p>
                    <p class="text-red-600 text-sm mt-1">Individual sizes</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">⚠️</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Unavailable Products</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $hiddenProductsCount }}</p>
                    <p class="text-gray-600 text-sm mt-1">All sizes out of stock</p>
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
                    @if ($topSelling)
                        <p class="text-2xl font-bold text-ayur-green mt-1">{{ $topSelling->name }}</p>
                        <p class="text-blue-600 text-sm mt-1">{{ $topSelling->total_sold }} units sold</p>
                    @else
                        <p class="text-2xl font-bold text-ayur-green mt-1">-</p>
                        <p class="text-blue-600 text-sm mt-1">No sales data yet</p>
                    @endif
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
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">Product Variants</h3>
                <div class="flex items-center space-x-4">
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.products.index') }}" class="px-3 py-1 text-sm rounded-md {{ !request('stock_status') ? 'bg-ayur-green text-white' : 'bg-gray-100 text-ayur-brown' }}">All</a>
                        <a href="{{ route('admin.products.index', ['stock_status' => 'in_stock']) }}" class="px-3 py-1 text-sm rounded-md {{ request('stock_status') == 'in_stock' ? 'bg-ayur-green text-white' : 'bg-gray-100 text-ayur-brown' }}">In Stock</a>
                        <a href="{{ route('admin.products.index', ['stock_status' => 'out_of_stock']) }}" class="px-3 py-1 text-sm rounded-md {{ request('stock_status') == 'out_of_stock' ? 'bg-ayur-green text-white' : 'bg-gray-100 text-ayur-brown' }}">Out of Stock</a>
                    </div>
                    <form action="{{ route('admin.products.index') }}" method="GET" class="flex space-x-2">
                        <input type="text" name="search" placeholder="Search products..." class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green" value="{{ request('search') }}">
                        <button type="submit" class="bg-gray-100 p-2 rounded-md text-ayur-brown hover:bg-gray-200 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b border-gray-100">
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">SKU</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Size</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Price</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Stock</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                @foreach ($product->sizes as $size)
                                    @if(request('stock_status') === 'in_stock' && $size->stock_quantity == 0)
                                        @continue
                                    @endif
                                    @if(request('stock_status') === 'out_of_stock' && $size->stock_quantity > 0)
                                        @continue
                                    @endif
                                    <tr class="table-hover">
                                        <td class="py-3 text-sm font-medium text-ayur-green">{{ $product->name }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">PROD-{{ $product->id }}-{{$size->id}}</td>
                                        <td class="py-3 text-sm text-ayur-brown">{{ $size->size }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">₹{{ $size->price }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">{{ $size->stock_quantity }} in stock</td>
                                        <td class="py-3">
                                            @if ($size->stock_quantity == 0)
                                                <span class="text-xs px-2 py-1 rounded-full bg-red-500 text-white">Out of Stock</span>
                                            @else
                                                <span class="text-xs px-2 py-1 rounded-full bg-green-500 text-white">In Stock</span>
                                            @endif
                                        </td>
                                        <td class="py-3 flex items-center">
                                            <!-- <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">Edit</button> -->
                                            <button class="update-stock-btn text-blue-500 hover:text-blue-700 text-sm mr-2"
                                                    data-size-id="{{ $size->id }}"
                                                    data-current-stock="{{ $size->stock_quantity }}"
                                                    data-product-name="{{ $product->name }} ({{ $size->size }})">
                                                Update Stock
                                            </button>
                                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product? This will delete all its sizes.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-ayur-brown">No products found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-6">
                    {{ $products->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Stock Modal -->
<div id="updateStockModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl max-w-md w-full">
        <form id="updateStockForm" method="POST" class="p-8">
            @csrf
            @method('PATCH')
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-playfair text-2xl font-bold text-ayur-green">Update Stock</h2>
                <button type="button" id="closeStockModalBtn" class="text-ayur-brown hover:text-ayur-green">&times;</button>
            </div>
            <p id="stockProductName" class="mb-4"></p>
            <div>
                <label for="stock_quantity" class="block text-ayur-green font-medium mb-2">New Stock Quantity:</label>
                <input type="number" name="stock_quantity" id="stock_quantity_input" class="w-full border p-2 rounded" min="0">
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-ayur-green text-white px-6 py-3 rounded-lg">Update Stock</button>
            </div>
        </form>
    </div>
</div>


<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl max-w-3xl w-full max-h-[95vh] overflow-y-auto">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="p-8">
            @csrf
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-playfair text-2xl font-bold text-ayur-green">Add New Product</h2>
                <button type="button" id="closeModalBtn" class="text-ayur-brown hover:text-ayur-green">&times;</button>
            </div>

            <!-- Product Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <input type="text" name="name" placeholder="Product Name" class="w-full border p-2 rounded">
                <input type="text" name="subtitle" placeholder="Product Subtitle" class="w-full border p-2 rounded">
                <select name="category_name" class="w-full border p-2 rounded bg-white">
                    <option value="" disabled selected>Select a Category</option>
                    <option value="Herbal Oils">Herbal Oils</option>
                    <option value="Skincare">Skincare</option>
                    <option value="Herbal Tea">Herbal Tea</option>
                    <option value="Churna & Powders">Churna & Powders</option>
                    <option value="Supplements">Supplements</option>
                </select>
            </div>
            <textarea name="description" placeholder="Description" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="key_benefits" placeholder="Key Benefits (one per line)" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="suitable_for" placeholder="Suitable For (one per line)" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="ingredients" placeholder="Ingredients (one per line)" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="how_to_use" placeholder="How to Use" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="pro_tips" placeholder="Pro Tips (one per line)" class="w-full border p-2 rounded mb-6"></textarea>
            <textarea name="precautions" placeholder="Precautions (one per line)" class="w-full border p-2 rounded mb-6"></textarea>

            <!-- Product Sizes -->
            <div id="sizes-container" class="mb-6">
                <h3 class="font-semibold mb-2">Product Sizes</h3>
                <div class="size-entry grid grid-cols-4 gap-2 mb-2">
                    <input type="text" name="sizes[0][size]" placeholder="Size (e.g., 100ml)" class="border p-2 rounded">
                    <input type="number" name="sizes[0][price]" placeholder="Price" class="border p-2 rounded">
                    <input type="number" name="sizes[0][original_price]" placeholder="Original Price" class="border p-2 rounded">
                    <input type="number" name="sizes[0][stock_quantity]" placeholder="Stock" class="border p-2 rounded">
                </div>
            </div>
            <button type="button" id="add-size-btn" class="bg-gray-200 px-4 py-2 rounded mb-6">Add Another Size</button>

            <!-- Product Images -->
            <div id="images-container" class="mb-6">
                <h3 class="font-semibold mb-2">Product Images</h3>
                <input type="file" name="images[]" multiple class="w-full border p-2 rounded">
                <p class="text-sm text-gray-500 mt-2">Select one primary image by clicking on its preview below.</p>
                <div id="image-previews" class="mt-4 flex flex-wrap gap-4"></div>
                <input type="hidden" name="primary_image_index" id="primary_image_index" value="0">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-ayur-green text-white px-6 py-3 rounded-lg">Save Product</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const addProductBtn = document.getElementById('addProductBtn');
    const addProductModal = document.getElementById('addProductModal');
    const closeModalBtn = document.getElementById('closeModalBtn');

    addProductBtn.addEventListener('click', () => {
        addProductModal.classList.remove('hidden');
        addProductModal.classList.add('flex');
    });

    closeModalBtn.addEventListener('click', () => {
        addProductModal.classList.add('hidden');
        addProductModal.classList.remove('flex');
    });

    // Dynamic Sizes
    const addSizeBtn = document.getElementById('add-size-btn');
    const sizesContainer = document.getElementById('sizes-container');
    let sizeIndex = 1;
    addSizeBtn.addEventListener('click', () => {
        const newSizeEntry = document.createElement('div');
        newSizeEntry.classList.add('size-entry', 'grid', 'grid-cols-4', 'gap-2', 'mb-2');
        newSizeEntry.innerHTML = `
            <input type="text" name="sizes[${sizeIndex}][size]" placeholder="Size" class="border p-2 rounded">
            <input type="number" name="sizes[${sizeIndex}][price]" placeholder="Price" class="border p-2 rounded">
            <input type="number" name="sizes[${sizeIndex}][original_price]" placeholder="Original Price" class="border p-2 rounded">
            <input type="number" name="sizes[${sizeIndex}][stock_quantity]" placeholder="Stock" class="border p-2 rounded">
        `;
        sizesContainer.appendChild(newSizeEntry);
        sizeIndex++;
    });

    // Image Previews
    const imagesInput = document.querySelector('input[name="images[]"]');
    const previewsContainer = document.getElementById('image-previews');
    const primaryImageIndexInput = document.getElementById('primary_image_index');

    imagesInput.addEventListener('change', function () {
        previewsContainer.innerHTML = '';
        Array.from(this.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgContainer = document.createElement('div');
                imgContainer.classList.add('relative', 'cursor-pointer');
                imgContainer.innerHTML = `<img src="${e.target.result}" class="w-24 h-24 object-cover rounded border-2 border-transparent">`;
                previewsContainer.appendChild(imgContainer);

                if (index == primaryImageIndexInput.value) {
                    imgContainer.querySelector('img').classList.add('border-ayur-green');
                }

                imgContainer.addEventListener('click', () => {
                    document.querySelectorAll('#image-previews img').forEach(img => img.classList.remove('border-ayur-green'));
                    imgContainer.querySelector('img').classList.add('border-ayur-green');
                    primaryImageIndexInput.value = index;
                });
            }
            reader.readAsDataURL(file);
        });
    });
});

// Update Stock Modal Logic
const updateStockModal = document.getElementById('updateStockModal');
const closeStockModalBtn = document.getElementById('closeStockModalBtn');
const updateStockForm = document.getElementById('updateStockForm');
const stockProductName = document.getElementById('stockProductName');
const stockQuantityInput = document.getElementById('stock_quantity_input');

document.querySelectorAll('.update-stock-btn').forEach(button => {
    button.addEventListener('click', () => {
        const sizeId = button.dataset.sizeId;
        const currentStock = button.dataset.currentStock;
        const productName = button.dataset.productName;

        //- Set the form action
        let url = "{{ route('admin.product_sizes.updateStock', ':id') }}";
        url = url.replace(':id', sizeId);
        updateStockForm.action = url;

        //- Populate the modal
        stockProductName.textContent = productName;
        stockQuantityInput.value = currentStock;

        //- Show the modal
        updateStockModal.classList.remove('hidden');
        updateStockModal.classList.add('flex');
    });
});

closeStockModalBtn.addEventListener('click', () => {
    updateStockModal.classList.add('hidden');
    updateStockModal.classList.remove('flex');
});

</script>

@include('admin.includes.footer')