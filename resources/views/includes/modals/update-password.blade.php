<!-- Update Password Modal -->
<div id="updatePasswordModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Update Password</h3>
            <div class="mt-2 px-7 py-3">
                <form id="updatePasswordForm">
                    @csrf
                    <div class="mb-4">
                        <label for="current_password" class="block text-sm font-medium text-gray-700 text-left">Current Password</label>
                        <input type="password" name="current_password" id="current_password" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-ayur-green focus:border-ayur-green" required>
                        <span id="current_password_error" class="text-red-500 text-sm"></span>
                    </div>

                    <div class="mb-4">
                        <label for="new_password" class="block text-sm font-medium text-gray-700 text-left">New Password</label>
                        <input type="password" name="new_password" id="new_password" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-ayur-green focus:border-ayur-green" required>
                        <span id="new_password_error" class="text-red-500 text-sm"></span>
                    </div>

                    <div class="mb-4">
                        <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 text-left">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-ayur-green focus:border-ayur-green" required>
                    </div>

                    <div id="password_update_status" class="text-sm my-2"></div>

                    <div class="items-center px-4 py-3">
                        <button id="updatePasswordBtn" type="submit" class="px-4 py-2 bg-ayur-green text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-ayur-green-dark focus:outline-none focus:ring-2 focus:ring-ayur-green">
                            Update Password
                        </button>
                    </div>
                </form>
            </div>
            <div class="items-center px-4 py-3">
                <button id="closePasswordModal" class="px-4 py-2 bg-gray-200 text-gray-800 text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
