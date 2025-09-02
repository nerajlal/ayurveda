<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\ShippingAddress;

class ProfileController extends Controller
{
    public function getAddress()
    {
        $user = Auth::user();
        $address = $user->shippingAddress;

        return response()->json($address);
    }

    public function updateAddress(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'delivery_phone_number' => 'nullable|string|max:20',
        ]);

        $user->shippingAddress()->updateOrCreate(
            ['user_id' => $user->id],
            $validatedData
        );

        return redirect()->back()->with('success', 'Your shipping address has been updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'current_password' => ['required', 'string', 'current_password'],
            'new_password' => ['required', 'string', Password::defaults(), 'confirmed'],
        ]);

        $user->update([
            'password' => Hash::make($validated['new_password']),
        ]);

        return response()->json(['message' => 'Password updated successfully.']);
    }
}
