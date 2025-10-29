<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/** @untested-ignore */
final class AuthController extends Controller
{
    /**
     * Log the user in.
     */
    public function login(LoginUserRequest $request) : JsonResponse
    {
        // Check if login credentials are valid...
        if (! Auth::attempt($request->only(keys: ['email', 'password'])))
        {
            return $this->error(message: 'Invalid credentials', statusCode: 401);
        }

        $user = User::firstWhere('email', $request['email']);

        return $this->ok(
            message: "Hello, {$user->username}",
            data: ['token' => $user->generateApiToken()],
        );
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request) : JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return $this->ok(message: "Logged out {$request->user()->username}");
    }
}
