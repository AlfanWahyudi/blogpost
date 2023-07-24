<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
    * Display a login page.
    */
    public function login(): View
    {
        return view('pages.auth.login');
    }

    /**
    * Display a register page.
    */
    public function register()
    {
        return view('pages.auth.register');
    }

    /**
     * Store a newly created new account in storage.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $request->safe()->only(['name', 'email', 'password']);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('signin')
            ->with('success', 'Yay, you have successfully created a new account. Try logging in now');
    }

    /**
    * for login to the app
    */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, !is_null($request->remember))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
