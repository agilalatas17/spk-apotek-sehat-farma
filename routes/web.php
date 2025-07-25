<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\PenilaianController;
use App\Http\Controllers\Admin\HasilController;

use App\Http\Controllers\Users\LandingController;
use App\Http\Controllers\Users\PreferensiController;
use App\Http\Controllers\Users\RekomendasiController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
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

Route::get('/', function () {
    return view('landing.welcome');
});

Route::get('/contact', function () {
    return view('landing.contact');
});

Route::get('/dashboard', function () {
    return view('layouts.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Login
Route::middleware('guest')->group(function () {
    Route::get('login/user', [AuthenticatedSessionController::class, 'showUserLoginForm'])->name('login.user');
    Route::post('login/user', [AuthenticatedSessionController::class, 'loginUser'])->name('login.user.post');

    Route::get('register/user', [RegisteredUserController::class, 'showUserRegisterForm'])->name('register.user');
    Route::post('register/user', [RegisteredUserController::class, 'registerUser'])->name('register.user.post');

    Route::get('login/admin', [AuthenticatedSessionController::class, 'showAdminLoginForm'])->name('login.admin');
    Route::post('login/admin', [AuthenticatedSessionController::class, 'loginAdmin'])->name('login.admin.post');

    Route::get('register/admin', [RegisteredUserController::class, 'showAdminRegisterForm'])->name('register.admin');
    Route::post('register/admin', [RegisteredUserController::class, 'registerAdmin'])->name('register.admin.post');
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Profile
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/obat', ObatController::class);
    Route::resource('/kriteria', KriteriaController::class);
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
    Route::post('/penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');
    Route::get('/hasil', [HasilController::class, 'index'])->name('hasil.index');
});

// User Profile
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::match(['get', 'post'], '/preferensi', [PreferensiController::class, 'index'])
        ->name('preferensi.index');
});

// require __DIR__ . '/auth.php';
