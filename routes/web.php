<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = session('locale', config('app.locale', 'en'));
    if (! in_array($locale, ['en', 'sw'], true)) {
        $locale = 'en';
    }

    return redirect()->route('home', ['locale' => $locale]);
});

Route::prefix('{locale}')
    ->where(['locale' => 'en|sw'])
    ->middleware(['locale'])
    ->group(function () {
        Route::get('/', fn () => view('home'))->name('home');
        Route::view('/about', 'about')->name('about');
        Route::view('/loan-products', 'loan-products')->name('loan-products');
        Route::view('/contact', 'contact')->name('contact');

        Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
        Route::get('/jobs/{slug}', [JobsController::class, 'show'])->name('jobs.show');
        Route::post('/jobs/{slug}/apply', [JobsController::class, 'apply'])->name('jobs.apply');
    });

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
