<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //


        RedirectIfAuthenticated::redirectUsing(function ($request) {
            $user = User::find(Auth::user()->id);


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
        });
    }
}