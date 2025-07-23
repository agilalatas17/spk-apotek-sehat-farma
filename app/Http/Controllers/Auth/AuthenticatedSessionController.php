<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationData;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login user view.
     */
    public function showUserLoginForm()
    {
        return view('auth.login-user');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array_merge($credentials, ['role' => 'user']))) {
            return redirect()->route('user.landing.welcome');
        }

        return back()->withErrors(['email' => 'Login user gagal']);
    }

    /**
     * Display the login admin view.
     */
    public function showAdminLoginForm()
    {
        return view('auth.login-admin');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array_merge($credentials, ['role' => 'admin']))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Login admin gagal']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
