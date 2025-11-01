<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

/** @untested-ignore */
final class AuthController extends Controller
{
    /**
     * Create a login form.
     */
    public function create() : View
    {
        return view('pages.auth.login');
    }

    /**
     * Log the user in.
     */
    public function login(LoginUserRequest $request) : RedirectResponse
    {
        // Pass the validated attributes of the
        // request to attempt a login...
        if (! Auth::attempt($request->validated()))
        {
            throw ValidationException::withMessages([
                'auth' => 'Onjuiste gebruikersnaam of wachtwoord.',
            ]);
        }

        // Recycle the session token to prevent session
        // hijacking because of old tokens...
        $request->session()->regenerate();

        return redirect()->route('admin.news.index')->with('status', 'Succesvol ingelogd');
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request) : RedirectResponse
    {
        Auth::logout();

        return redirect('/')->with('status', 'Succesvol uitgelogd');
    }
}
