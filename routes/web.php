<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// Route::get ('admin/login',          [AuthController::class, 'customLogin'])->name        ('auth.login');
// Route::get ('admin/signup',         [AuthController::class, 'customRegistration'])->name ('auth.registration');
//Route::get ('admin/forgotpassword', [AuthController::class, 'forgotpassword'])->name     ('auth.forgotpassword');

Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
Route::get('admin/login', [AuthController::class, 'index'])->name('login');
Route::post('admin/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('admin/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('admin/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('admin/signout', [AuthController::class, 'signOut'])->name('signout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

