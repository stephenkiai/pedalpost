<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Contributor\ContributorController;
use App\Http\Controllers\GuestAuthor\GuestAuthorController;

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


/* open Routes to all users */
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('home.gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('front.account.dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard1');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/new', [PostController::class, 'create'])->name('post.create');
    Route::post('/posts/save', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update');
    Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])->name('post.delete');


    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/new-category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/save-category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
});


/*multi role routes */
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});

Route::middleware(['auth','role:editor'])->group(function () {
    Route::get('/editor/dashboard', [EditorController::class, 'index'])->name('editor.dashboard');

});

Route::middleware(['auth','role:author'])->group(function () {
    Route::get('/author/dashboard', [AuthorController::class, 'index'])->name('author.dashboard');

});

Route::middleware(['auth','role:guest-author'])->group(function () {
    Route::get('/guest-author/dashboard', [GuestAuthorController::class, 'index'])->name('guest-author.dashboard');

});

Route::middleware(['auth','role:contributor'])->group(function () {
    Route::get('/contributor/dashboard', [ContributorController::class, 'index'])->name('contributor.dashboard');
});


require __DIR__.'/auth.php';
