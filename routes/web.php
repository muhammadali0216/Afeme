<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

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
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/', [PageController::class, 'index'])->name('/');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){

Route::resource('abouts', AboutController::class);

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);


});


require __DIR__.'/auth.php';
