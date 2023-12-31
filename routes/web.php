<?php

use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\DataValidatorController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\PengaduController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JelajahController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\TentangController;
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

//data admin

Route::controller(UserController::class)->group(function () {
        Route::get('admins','index');
        Route::get('admins/create','create');
        Route::get('/validator/users', 'showValidatorUsers');
        Route::get('/admin/users', 'showAdminUsers');
        Route::post('admins','store');
        Route::get('admins/{id}/edit', 'edit');
        Route::put('admins/{id}','update');
        Route::delete('admins/{id}');
});
Route::resource('dinas', DinasController::class);
Route::resource('data-admin', DataAdminController::class);
Route::resource('data-validator', DataValidatorController::class);
Route::resource('pengadu', PengaduController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('jelajah', JelajahController::class);
Route::resource('tentang', TentangController::class);
Route::resource('data-pengaduan', DataPengaduanController::class);
Route::prefix('superadmin')->group(function () {
// Route untuk halaman dashboard admin
Route::get('/dashboard', [SuperadminController::class, 'dashboard'])->name('superadmin.dashboard');

// Route untuk halaman pengaturan admin
//Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});
Route::get('/', function () {
    return view('welcome');
});
