<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkedinController;


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
Route::get('auth/google', 
    [GoogleController::class, 'redirectToGoogle']
);

Route::get('auth/google/callback',
    [GoogleController::class, 'handleGoogleCallback']
);

Route::get('auth/linkedin',
    [LinkedinController::class, 'linkedinRedirect']
);

Route::get('auth/linkedin/callback',
    [LinkedinController::class, 'linkedinCallback']
);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
