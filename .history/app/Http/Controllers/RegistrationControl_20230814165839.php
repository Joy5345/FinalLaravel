<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
{
    // Validation
    $validatedData = $request->validate([
        'Name' => 'required',
        'email' => 'required|email',
        'Describe' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Handle image upload
    $imagePath = $request->file('image')->store('images', 'public');

    return redirect()->back()->with('success', 'User registered successfully.');
}
}
return response()->json([
    'name' => $user->name,
    'email' => $user->email,
    'description' => $user->description,
    'image_path' => asset('storage/' . $user->image_path),
]);
{
    dd($request->all()); // Debugging output
    // Rest of the registration logic
}
