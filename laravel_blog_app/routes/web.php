<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
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

Route::post('/contact/delete/{id}', [ContactController::class, 'contact_delete_idM'])->name('contact_delete_idM');


//NewsController


Route::get('/news/author', [NewsController::class, 'NewsAuthor'])->name('news_NewsAuthor');
Route::get('/news/category', [NewsController::class, 'NewsCategory'])->name('news_NewsCategory');
Route::get('/news', [NewsController::class, 'News'])->name('news_index');
Route::get('/news/search', [NewsController::class, 'NewsSearch'])->name('news_NewsSearch');
Route::get('/news/single', [NewsController::class, 'NewsSingle'])->name('news_NewsSingle');


//NewsController-admin


Route::get('/news/admin/add-post', [NewsController::class, 'AdminNews_add_post'])->name('AdminNews_add_post');
Route::get('/news/admin/add-user', [NewsController::class, 'AdminNews_add_user'])->name('AdminNews_add_user');


//to show the list of category
Route::get('/news/admin/category', [NewsController::class, 'AdminNews_category'])->name('AdminNews_category');

Route::get('/news/admin', [NewsController::class, 'AdminNews_post'])->name('AdminNews_post');
Route::get('/news/admin/post', [NewsController::class, 'AdminNewsSingle'])->name('AdminNewsSingle');
Route::get('/news/admin/update-category/{id}', [NewsController::class, 'AdminNews_update_category_page'])->name('AdminNews_update_category');
Route::get('/news/admin/update-post', [NewsController::class, 'AdminNews_update_post'])->name('AdminNews_update_post');
Route::get('/news/admin/update-user/{id}', [NewsController::class, 'AdminNews_update_user'])->name('AdminNews_update_user');
Route::get('/news/admin/user', [NewsController::class, 'AdminNews_user'])->name('AdminNews_user');

Route::post('/news/admin/add-user', [NewsController::class, 'AdminNews_add_user_DataPost'])->name('AdminNews_add_user_DataPost');
Route::put('/news/admin/update-user/{id}', [NewsController::class, 'AdminNews_update_user_DataPost'])->name('AdminNews_update_user_DataPost');
Route::delete('/news/admin/delete-user/{id}', [NewsController::class, 'AdminNews_delete_user_DataPost'])->name('AdminNews_delete_user_DataPost');


Route::post('/news/admin/add_category_data', [NewsController::class, 'AdminNews_post_DataPost'])->name('AdminNews_post_DataPost');
Route::get('/news/admin/update-category/{id}', [NewsController::class, 'AdminNews_update_category'])->name('AdminNews_update_category');

Route::post('/news/admin/add-post', [NewsController::class, 'AdminNews_add_post_DataPost'])->name('AdminNews_add_post_DataPost');


Route::get('/news/admin/category', [NewsController::class, 'AdminNews_post_to_show'])->name('AdminNews_post_to_show');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/blogs/{blog}/toggle-active', [AdminController::class, 'toggleActive'])->name('admin.toggleActive');
});
