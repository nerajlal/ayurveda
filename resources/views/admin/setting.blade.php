@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Account Settings</h2>
                <p class="text-ayur-brown mt-1">Manage your account and password.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                    <span class="text-lg">🔔</span>
                </button>
                <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                    Update Password
                </button>
            </div>
        </div>
    </div>

    <!-- Password Update Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-xl card-shadow">
            <div class="p-6 border-b border-gray-100">
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">Change Password</h3>
                <p class="text-sm text-ayur-brown mt-1">Ensure your account is secure by creating a strong password.</p>
            </div>
            <div class="p-6 space-y-6">
                <div>
                    <label for="current-password" class="block text-sm font-medium text-ayur-brown mb-1">Current Password</label>
                    <input type="password" id="current-password" class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                </div>
                <div>
                    <label for="new-password" class="block text-sm font-medium text-ayur-brown mb-1">New Password</label>
                    <input type="password" id="new-password" class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-ayur-brown mb-1">Confirm New Password</label>
                    <input type="password" id="confirm-password" class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                </div>
            </div>
        </div>

    </div>
</div>

@include('admin.includes.footer')
