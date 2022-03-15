<?php

use App\Http\Controllers\Dashboard\Permission\PermissionController;
use App\Http\Controllers\Dashboard\Role\RoleController;
use App\Http\Controllers\Dashboard\User\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Dashboard
Route::resource('users', UserController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
Route::get('setting', [\App\Http\Controllers\Dashboard\Setting\SettingsController::class, 'index'])->name('settings');
