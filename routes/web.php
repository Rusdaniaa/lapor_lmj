<?php

use App\Http\Controllers\DinasController;
use App\Http\Controllers\PengaduController;
use App\Http\Controllers\UserController;
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

Route::controller(DinasController::class)->group(function(){
        Route::get('dinas', 'index');
        Route::get('/dinas/form', 'showForm');
});

Route::controller(PengaduController::class)->group(function(){
    Route::get('pengadu', 'index');
});




Route::get('/', function () {
    return view('welcome');
});
