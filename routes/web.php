<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class,'AdminDashboard'])->name('admin.dashboard');
Route::get('/agent/dashboard', [AgentController::class,'AgentDashboard'])->name('agent.dashboard');
