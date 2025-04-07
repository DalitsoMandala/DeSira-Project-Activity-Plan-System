<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\ManageSeasons;
use App\Livewire\ManageUsers;
use App\Livewire\OnFarmSites;
use App\Livewire\OnStationSites;
use App\Livewire\Operations;
use App\Livewire\ProfileManagement;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return '/';
});


Route::middleware('auth')->group(function () {});

function getCommonRoutes($role)
{
    $routePrefix = $role == 'project manager' ? 'project-manager' : $role;

    if ($role == 'admin') {
        Route::get('/dashboard', Dashboard::class)->name($role . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($role . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($role . '.on-station-sites');
        Route::get('/manage-seasons', ManageSeasons::class)->name($role . '.manage-seasons');
        Route::get('/operations', Operations::class)->name($role . '.operations');
        Route::get('/users', ManageUsers::class)->name($role . '.users');
    }

    if ($role == 'manager') {
        Route::get('/dashboard', Dashboard::class)->name($role . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($role . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($role . '.on-station-sites');
        Route::get('/manage-seasons', ManageSeasons::class)->name($role . '.manage-seasons');
        Route::get('/operations', Operations::class)->name($role . '.operations');
    }

    if ($role == 'project manager') {
        Route::get('/dashboard', Dashboard::class)->name($routePrefix . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($routePrefix . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($routePrefix . '.on-station-sites');
    }

    if ($role == 'staff') {
        Route::get('/dashboard', Dashboard::class)->name($role . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($role . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($role . '.on-station-sites');
        Route::get('/operations', Operations::class)->name($role . '.operations');
    }
    Route::get('/profile', ProfileManagement::class)->name($role . '.profile');
    // Profile routes with role prefix and consistent naming

}

// Route groups with prefixes
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    getCommonRoutes('admin');
});

Route::middleware(['auth', 'verified', 'role:manager'])->prefix('manager')->group(function () {
    getCommonRoutes('manager');
});

Route::middleware(['auth', 'verified', 'role:project manager'])->prefix('project-manager')->group(function () {
    getCommonRoutes('project manager');
});

Route::middleware(['auth', 'verified', 'role:staff'])->prefix('staff')->group(function () {
    getCommonRoutes('staff');
});



require __DIR__ . '/auth.php';
