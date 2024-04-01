<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {

            $user = \Laravel\Socialite\Facades\Socialite::driver('google')->user();

            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                \Illuminate\Support\Facades\Auth::login($existingUser);
            } else {

                $newUser = User::create([
                    'name' => $user->user['given_name'],
                    'email' => $user->email,
                    'password' => Hash::make(Str::random(10)),
                ]);

                \Illuminate\Support\Facades\Auth::login($newUser);
            }

            return redirect()->intended('/');
        
    }

}
