<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [PostController::class, 'index']);

// Categories Page
Route::get('/categories', function () {
    return view('categories');
})->name('categories');

// Dashboard Page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// 1. Static Routes (ဥပမာ - create ကဲ့သို့သော သီးသန့် Route များကို Wildcard ၏ အပေါ်တွင် အမြဲထားရပါမည်)
Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});


// 2. Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// 3. Dynamic / Wildcard Route (Post အသေးစိတ်ကြည့်ရန် - ဤကဲ့သို့သော {post} ပါသည့် Route များကို အောက်ဆုံးတွင် ထားရပါမည်)
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

require __DIR__.'/auth.php';