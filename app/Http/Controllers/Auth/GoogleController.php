<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
     /**
     * Redirect the user to the Google authentication page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'photo' => $googleUser->avatar, // Jika ingin menyimpan foto profil
                'password' => Hash::make(now()) // Password bisa di-generate secara acak
            ]);

            Auth::login($user);

            return redirect()->route('back.home.index')->with('success', 'Login successful!');

        } catch (\Throwable $th) {
            // Tangani error, misalnya redirect ke halaman login dengan pesan error
            return redirect()->route('auth.login')->with('error', 'Login failed! Please try again.');
        }
    }
}
