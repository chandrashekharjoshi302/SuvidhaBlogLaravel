<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/blog', [BlogController::class, 'create']);


Route::get('/contact', [ContactController::class, 'index'])->name('contact_index');
Route::get('/contact/add', [ContactController::class, 'add'])->name('contact_add');
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact_edit');
Route::get('/contact/update', [ContactController::class, 'update'])->name('contact_update');
Route::get('/contact/delete', [ContactController::class, 'delete'])->name('contact_delete');

Route::post('/contact/add', [ContactController::class, 'saveData'])->name('contact_saveData');

Route::delete('/contact/delete/{id}', [ContactController::class, 'contact_delete_id'])->name('contact_delete_id');

Route::put('/contact/edit/{id}', [ContactController::class, 'EditData'])->name('Contact_EditData');

Route::post('/contact/updateM', [ContactController::class, 'UpdateM'])->name('contact_UpdateM');
Route::post('/contact/update', [ContactController::class, 'contact_delete_idM'])->name('contact_updateData');

Route::post('/contact/delete', [ContactController::class, 'contact_delete_idM'])->name('contact_delete_idM');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/blogs/{blog}/toggle-active', [AdminController::class, 'toggleActive'])->name('admin.toggleActive');
});
