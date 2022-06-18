<?php

use App\Http\Controllers\MainHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// deneme

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Main İndex
Route::get('/',[MainHomeController::class, 'index'])->name('index');
Route::get('/aboutus',[MainHomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact',[MainHomeController::class, 'contact'])->name('contact');
Route::get('/whyhere',[MainHomeController::class, 'whyhere'])->name('whyhere');
