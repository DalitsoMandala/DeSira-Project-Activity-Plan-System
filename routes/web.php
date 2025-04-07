<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\ManageSeasons;
use App\Livewire\ManageUsers;
use App\Livewire\OnFarmSites;
use App\Livewire\OnStationSites;
use App\Livewire\Operations;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


function getCommonRoutes($role)
{


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
        $role = strtolower(str_replace(' ', '-', $role));
        Route::get('/dashboard', Dashboard::class)->name($role . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($role . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($role . '.on-station-sites');
    }


    if ($role == 'staff') {
        Route::get('/dashboard', Dashboard::class)->name($role . '.dashboard');
        Route::get('/manage-crops/on-farm-sites', OnFarmSites::class)->name($role . '.on-farm-sites');
        Route::get('/manage-crops/on-station-sites', OnStationSites::class)->name($role . '.on-station-sites');

        Route::get('/operations', Operations::class)->name($role . '.operations');
    }
}
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
