<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('book', [HomeController::class, 'book'])->name('book');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('benifit', [HomeController::class, 'benifit'])->name('benifit');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('adminindex', [HomeController::class, 'indexadmin']);
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
