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
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Customers Management</h2>
                <p class="text-ayur-brown mt-1">View and manage your customer profiles.</p>
            </div>
        </div>
    </div>

    <!-- Customers List -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center flex-wrap gap-4">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Customers</h3>
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
                {{ $customers->links() }}
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
