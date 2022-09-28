<?php

use App\Http\Controllers\Setting\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::resource('konfigurasi/roles', RoleController::class);
});

// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles', 'index')->middleware('can:read role');
//     Route::get('/roles/create', 'create');
// });
require __DIR__.'/auth.php';