<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request data
      $validatedData = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData->fails()) {
            return back()->withErrors($validatedData)->withInput()->with('error', 'Validation failed. Please check your input.');
        }

        // Check if the user already exists
        if (\App\Models\User::where('email', $request->email)->exists()) {
            return back()->withErrors(['email' => 'Email is already registered.'])->withInput();
        }

        // Create the user
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the intended page
        return redirect()->intended('back.home')->with('success', 'Registration successful!');
    }
}
