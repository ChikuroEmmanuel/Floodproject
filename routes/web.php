<?php

use App\Http\Controllers\LockController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/lock',[LockController::class,'lock'])->name('lockscreen');
