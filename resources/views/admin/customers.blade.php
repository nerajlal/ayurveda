@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }

    /* Fade animation */
    .fade-enter { opacity: 0; transform: scale(0.95); }
    .fade-enter-active { opacity: 1; transform: scale(1); transition: all 0.3s ease-out; }
    .fade-exit { opacity: 1; transform: scale(1); }
    .fade-exit-active { opacity: 0; transform: scale(0.95); transition: all 0.3s ease-in; }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Customers Management</h2>
                <p class="text-ayur-brown mt-1">View and manage your customer profiles.</p>
            </div>
        </div>
    </div>

    <!-- Customer Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Customers</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $totalCustomers }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">👥</span>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Newest Customer</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $newestCustomer ? $newestCustomer->first_name : 'N/A' }}</p>
                    <p class="text-ayur-brown text-sm mt-1">{{ $newestCustomer ? 'Joined ' . $newestCustomer->created_at->diffForHumans() : '' }}</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <span class="text-orange-600 text-xl">🌱</span>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Active Customers</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ $activeCustomers }}</p>
                    <p class="text-blue-600 text-sm mt-1">In the last 30 days</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">🛒</span>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Top Spender</p>
                    @if ($topSpender && $topSpender->orders_sum_total_amount > 0)
                        <p class="text-2xl font-bold text-ayur-green mt-1">{{ $topSpender->first_name }}</p>
                        <p class="text-purple-600 text-sm mt-1">₹{{ number_format($topSpender->orders_sum_total_amount, 2) }} spent</p>
                    @else
                        <p class="text-2xl font-bold text-ayur-green mt-1">-</p>
                        <p class="text-purple-600 text-sm mt-1">No sales data yet</p>
                    @endif
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <span class="text-purple-600 text-xl">⭐</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Customers List -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center flex-wrap gap-4">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Customers</h3>
            <form action="{{ route('admin.customers.index') }}" method="GET" class="flex items-center space-x-2 flex-grow sm:flex-grow-0">
                <input type="text" name="search" placeholder="Search by name or email..." class="flex-grow border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green" value="{{ request('search') }}">
                <button type="submit" class="bg-ayur-green p-2 rounded-md text-white hover:bg-ayur-dark transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full min-w-max">
                    <thead>
                        <tr class="text-left border-b border-gray-100">
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Customer Name</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Email</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Phone Number</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Joined On</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr class="table-hover">
                            <td class="py-3 font-medium text-ayur-green">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                            <td class="py-3 text-ayur-brown">{{ $customer->email }}</td>
                            <td class="py-3 text-ayur-brown">{{ $customer->phone_number }}</td>
                            <td class="py-3 text-ayur-brown">{{ $customer->created_at->format('M d, Y') }}</td>
                            <td class="py-3">
                                @if($customer->status == 0)
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Active</span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full font-medium">Blocked</span>
                                @endif
                            </td>
                            <td class="py-3">
                                <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-ayur-brown">No customers found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-6">
                {{ $customers->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Customer Details Modal -->
<div id="customer-modal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <!-- Overlay -->
    <div id="modal-overlay" class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Modal Content -->
    <div id="modal-box" class="relative bg-white p-6 rounded-xl shadow-xl max-w-md w-full z-10 fade-enter">
        <div class="flex justify-between items-start mb-4">
            <h3 class="font-playfair text-2xl font-bold text-ayur-green">Customer Profile</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div id="modal-details" class="text-ayur-brown space-y-3"></div>
    </div>
</div>

<script>
function showCustomerDetails(customer) {
    const modal = document.getElementById('customer-modal');
    const detailsContainer = document.getElementById('modal-details');
    const modalBox = document.getElementById('modal-box');

    let statusClass = customer.status === 'Active' 
        ? 'bg-green-100 text-green-800' 
        : 'bg-gray-100 text-gray-800';

    detailsContainer.innerHTML = `
        <p><strong>Name:</strong> ${customer.name}</p>
        <p><strong>Email:</strong> ${customer.email}</p>
        <p><strong>Phone:</strong> ${customer.phoneNumber}</p>
        <p><strong>Total Orders:</strong> ${customer.orders}</p>
        <p><strong>Total Spent:</strong> ${customer.spent}</p>
        <p><strong>Last Order:</strong> ${customer.last_order}</p>
        <p><strong>Status:</strong> 
            <span class="${statusClass} text-xs px-2 py-1 rounded-full font-medium">${customer.status}</span>
        </p>
    `;

    modal.classList.remove('hidden');
    modalBox.classList.add('fade-enter-active');
}

function closeModal() {
    const modal = document.getElementById('customer-modal');
    modal.classList.add('hidden');
}

// Close on overlay click
document.getElementById('modal-overlay').addEventListener('click', closeModal);
</script>

@include('admin.includes.footer')
