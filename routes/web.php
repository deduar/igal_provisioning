<?php

use App\Http\Controllers\DeploitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/deploit', [DeploitController::class, 'index'])->middleware(['auth'])->name('deploit.index');
Route::get('/deploit/create', [DeploitController::class, 'create'])->middleware(['auth'])->name('deploit.create');
Route::post('/deploit/store', [DeploitController::class, 'store'])->middleware(['auth'])->name('deploit.store');

require __DIR__.'/auth.php';
