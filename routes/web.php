<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get ('admin/users/list',         [UserController::class, 'index'])->name      ('admin.users.index');
Route::get ('admin/users/add',          [UserController::class, 'addUser'])->name    ('admin.users.add');
Route::post('admin/users/store',        [UserController::class, 'storeUser'])->name  ('admin.users.store');
Route::get ('admin/users/{id}/edit',    [UserController::class, 'editUser'])->name   ('admin.users.edit');
Route::get ('admin/users/{id}',         [UserController::class, 'show'])->name       ('admin.users.show');
Route::put ('admin/users/{id}/update',  [UserController::class, 'updateUser'])->name ('admin.users.update');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
