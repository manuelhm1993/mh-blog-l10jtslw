<?php

use Illuminate\Support\Facades\Route;

// --------------- Usar el componente como un controlador
use App\Http\Livewire\ShowPosts;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba/{name}', ShowPosts::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // --------------- Usar el componente como un controlador
    Route::get('/dashboard', ShowPosts::class)->name('dashboard');
});
