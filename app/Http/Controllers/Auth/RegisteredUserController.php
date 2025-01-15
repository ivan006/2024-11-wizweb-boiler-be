<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => 'required|string',
            'c_password' => 'required|same:password'
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Check the environment
        if (app()->environment('local')) {
            // Automatically mark the email as verified in local environment
            $user->markEmailAsVerified();
        } else {
            // Send email verification notification in non-local environments
            $user->sendEmailVerificationNotification();
        }

        // Return a response indicating the result
        return response()->json([
            'user' => $user,
            'message' => app()->environment('local')
                ? 'Registration successful! Email automatically verified (local environment).'
                : 'Registration successful! Please verify your email to complete the registration.',
        ]);
    }
}
