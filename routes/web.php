<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Defense\DefenseController as AdminDefenseController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(AdminDefenseController::class)->prefix('admin/defense')->middleware('auth')->name('admin.defenses.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{defense}', 'show')->name('show');
    Route::get('/{defense}/edit', 'edit')->name('edit');
    Route::delete('/{defense}', 'destroy')->name('destroy');
});

Route::controller(AdminDefenseController::class)->prefix('admin/defense/level')->middleware('auth')->name('admin.defenses.levels.')->group(function () {
    //Route::get('/', 'index')->name('index');
    Route::get('/{defense}/create_level', 'create_level')->name('create');
    //Route::get('/{defense}', 'show')->name('show');
    Route::get('/{defense}/edit', 'edit_level')->name('edit');
    Route::delete('/{defense}', 'destroy_level')->name('destroy');
});
