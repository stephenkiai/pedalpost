<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Editor\EditorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
