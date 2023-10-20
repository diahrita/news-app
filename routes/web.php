<?php

use App\Http\Controllers\Admin\{AuthController, ProfileController, UserController};
use App\Http\Controllers\Backend\{UsersController, CategoryController, ArticleController};
use App\Http\Controllers\Home\HomePageController;
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

// Route::get('/', function () {
//     return view('home.home');
// });

Route::get('/', [HomePageController::class, 'index'])->name('index');

Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('getLogin')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin')->middleware('guest');

Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/logout', [ProfileController::class, 'logout'])->name('logout');
});

Route::prefix('users')->group(function () {
    Route::get('/view', [UsersController::class, 'usersView'])->name('users.view');
    Route::get('/add', [UsersController::class, 'usersAdd'])->name('users.add');
    Route::post('/store', [UsersController::class, 'usersStore'])->name('users.store');
    Route::get('/edit{id}', [UsersController::class, 'usersEdit'])->name('users.edit');
    Route::post('/update{id}', [UsersController::class, 'usersUpdate'])->name('users.update');
    Route::get('/delete{id}', [UsersController::class, 'usersDelete'])->name('users.delete');
});

Route::prefix('category')->group(function () {
    Route::get('/view', [CategoryController::class, 'categoryView'])->name('category.view');
    Route::get('/add', [CategoryController::class, 'categoryAdd'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/edit{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/update{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/delete{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');
});

Route::prefix('article')->group(function () {
    Route::get('/view', [ArticleController::class, 'articleView'])->name('article.view');
    Route::get('/add', [ArticleController::class, 'articleAdd'])->name('article.add');
    Route::post('/store', [ArticleController::class, 'articleStore'])->name('article.store');
    Route::get('/edit{id}', [ArticleController::class, 'articleEdit'])->name('article.edit');
    Route::post('/update{id}', [ArticleController::class, 'articleUpdate'])->name('article.update');
    Route::get('/delete{id}', [ArticleController::class, 'articleDelete'])->name('article.delete');
});
