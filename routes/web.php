<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CategoryController;

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

// guest routes
Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/download-cv', [GuestController::class, 'downloadCv'])->name('download.cv');
Route::get('/resume', [GuestController::class, 'resume'])->name('resume');
Route::prefix('portfolio')->group(function () {
    Route::get('/', [GuestController::class, 'portfolio'])->name('portfolio');
    Route::get('/{id}', [GuestController::class, 'portfolioDetails'])->name('portfolio.details');
});
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/blog', [GuestController::class, 'showblog'])->name('showblog');
Route::post('/store-message', [GuestController::class, 'storeMessage'])->name('public.message.store');

// admin routes
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // about routes
    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('admin.about');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
        Route::put('/update/{id}', [AboutController::class, 'update'])->name('admin.about.update');
    });

    // skill routes
    Route::prefix('skill')->group(function () {
        Route::get('/', [App\Http\Controllers\SkillController::class, 'index'])->name('admin.skill');
        Route::get('/add-skill', [App\Http\Controllers\SkillController::class, 'create'])->name('admin.skill.create');
        Route::post('/store', [App\Http\Controllers\SkillController::class, 'store'])->name('admin.skill.store');
        Route::get('/edit/{id}', [App\Http\Controllers\SkillController::class, 'edit'])->name('admin.skill.edit');
        Route::put('/update/{id}', [App\Http\Controllers\SkillController::class, 'update'])->name('admin.skill.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\SkillController::class, 'destroy'])->name('admin.skill.destroy');
    });

    // resume routes
    Route::prefix('resume')->group(function () {
        Route::get('/', [App\Http\Controllers\ResumeController::class, 'index'])->name('admin.resume');
        Route::get('/add-resume', [App\Http\Controllers\ResumeController::class, 'create'])->name('admin.resume.create');
        Route::post('/store', [App\Http\Controllers\ResumeController::class, 'store'])->name('admin.resume.store');
        Route::get('/edit/{id}', [App\Http\Controllers\ResumeController::class, 'edit'])->name('admin.resume.edit');
        Route::put('/update/{id}', [App\Http\Controllers\ResumeController::class, 'update'])->name('admin.resume.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\ResumeController::class, 'destroy'])->name('admin.resume.destroy');
    });

    // category routes
    Route::prefix('category')->group(function () {
        Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.category');
        Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    // portfolio routes
    Route::prefix('portfolio')->group(function () {
        Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index'])->name('admin.portfolio');
        Route::get('/add-portfolio', [App\Http\Controllers\PortfolioController::class, 'create'])->name('admin.portfolio.create');
        Route::post('/store', [App\Http\Controllers\PortfolioController::class, 'store'])->name('admin.portfolio.store');
        Route::get('/edit/{id}', [App\Http\Controllers\PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
        Route::put('/update/{id}', [App\Http\Controllers\PortfolioController::class, 'update'])->name('admin.portfolio.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');
    });

    // message routes
    Route::prefix('message')->group(function () {
        Route::get('/', [App\Http\Controllers\MessageController::class, 'index'])->name('admin.message.index');
        Route::get('/edit/{id}', [App\Http\Controllers\MessageController::class, 'edit'])->name('admin.message.edit');
        Route::put('/update/{id}', [App\Http\Controllers\MessageController::class, 'update'])->name('admin.message.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('admin.message.destroy');
    });

    // about system routes
    Route::prefix('about-system')->group(function () {
        Route::get('/', [App\Http\Controllers\AboutSystemController::class, 'index'])->name('admin.aboutSystem.index');
    });

    // profile routes
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // blog routes
    Route::middleware('auth')->group(function () {
        Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blog');
        Route::get('/add-blog', [App\Http\Controllers\BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/store', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('admin.blog.destroy');
    });
});

require __DIR__.'/auth.php';
