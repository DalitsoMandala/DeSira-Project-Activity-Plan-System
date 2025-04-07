<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = Auth::user();

        $redirectUrl = self::getDashboardRoute($user);
        return redirect()->intended(($redirectUrl));
    }

    public static function getDashboardRoute($user): string
    {


        // Check for admin role
        if ($user->hasAnyRole('admin')) {
            return '/admin/dashboard';
        }
        if ($user->hasAnyRole('staff')) {
            return '/staff/dashboard';
        }
        if ($user->hasAnyRole('manager')) {

            return '/manager/dashboard';
        }

        if ($user->hasAnyRole('project manager')) {

            return '/project-manager/dashboard';
        }

        return '/staff/dashboard';

        // Default fallback
        return '/';
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
