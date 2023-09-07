<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

    Route::post('/register', [AuthController::class, 'store']);

    Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
});

// Auth::routes(['verify' => true]);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth', 'verified');

Route::middleware(['auth','verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
