<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\CollaborationController;

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

    Route::resource('artworks', ArtworkController::class);
    Route::resource('users', UserController::class);
    Route::resource('collaborations', CollaborationController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('events', EventController::class);
    Route::resource('interactions', InteractionController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('tags',TagsController::class);

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/permissions', [AdminController::class, 'permissions'])->name('admin.permissions');
    Route::post('/admin/permissions', [AdminController::class, 'storePermission'])->name('admin.storePermission');
    Route::get('/admin/create-permission',[AdminController::class, 'createPermission'])->name('admin.create.permission');
    Route::get('/admin/edit-permission',[AdminController::class, 'editPermission'])->name('admin.edit.permission');
    Route::delete('/admin/delete-permission/{id}', [AdminController::class, 'destroyPermission'])->name('admin.delete.permission');

    Route::get('/admin/roles', [AdminController::class, 'roles'])->name('admin.roles');
    Route::post('/admin/roles', [AdminController::class, 'storeRole'])->name('admin.storeRole');
    Route::get('/admin/create-role',[AdminController::class, 'createRole'])->name('admin.create.role');
    Route::get('/admin/edit-role',[AdminController::class, 'editRole'])->name('admin.edit.role');
    Route::delete('/admin/delete-role/{id}', [AdminController::class, 'destroyRole'])->name('admin.delete.role');


    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/assignments', [AdminController::class, 'assignments'])->name('admin.assignments');
    Route::post('/admin/assign-roles', [AdminController::class, 'assignRole'])->name('admin.assignRoles');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
