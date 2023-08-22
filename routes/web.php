<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/dashboard')->name('home');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function() {
        return view('pages.dashboard.index', ['type_menu' => '']);
    })->name('dashboard');

    Route::get('profile-edit', function () {
        return view('pages.profile.index', ['type_menu' => '']);
    })->name('profile.edit');

    Route::resource('user', UserController::class);
});
