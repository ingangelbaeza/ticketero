<?php

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
    return view('welcome');
});

Route::middleware(['auth'])->prefix('/ticketeros')->group(function () {
    Route::get('/', \App\Livewire\Ticketero::class)
        ->name('ticketeros');
    Route::get('/performer/{id}', \App\Livewire\Performer::class)
        ->name('ticketeros.performer');
    Route::get('/venue/{id}', \App\Livewire\Venue::class)
        ->name('ticketeros.venue');
    Route::get('/destination/{latitude}/{longitude}/{city}', \App\Livewire\Destination::class)
        ->name('ticketeros.destination');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
