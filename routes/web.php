<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/gallery',[ClientController::class, 'gallery'])->name('gallery');
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});
Route::get("/login", [UsersController::class, 'index'])->name('login');
Route::post("/loginAction", [UsersController::class, 'login'])->name('loginAction');
Route::post("/register", [UsersController::class, "register"])->name("register");
Route::get("/logout", [UsersController::class, "logout"])->name("logout");
Route::middleware('auth')->group(function () {
    Route::resource("/berita-admin", AdminController::class);
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::get('/profilePT', [DashboardController::class, "editProfile"])->name('profilePT');
    Route::post('/profilePT/{id}', [DashboardController::class, "updateProfile"])->name('updateProfile');
    Route::get("/gallery-admin", [DashboardController::class, "galleryAdmin"])->name('galleryAdmin');
    Route::post("/gallery-admin", [DashboardController::class, "addGallery"])->name('galleryAdminStore');
    Route::delete("/gallery-admin/{id}", [DashboardController::class, "deleteGallery"])->name('galleryAdminDelete');
});
