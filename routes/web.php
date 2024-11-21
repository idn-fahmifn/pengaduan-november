<?php

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Jikka admin, maka akan dimasukan ke route berikut : 
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', AdminMiddleware::class])->name('dashboard');

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// group prefix route halaman admin
Route::prefix('admin')->group(function(){
    Route::resource('pengaduan', PengaduanController::class);
})->middleware(AdminMiddleware::class);



// jika bukan admin maka akan diarahkan kerouting berikut : 
Route::get('halaman-user', function(){
    return view('user.dashboard-user');
})->name('user');

require __DIR__.'/auth.php';


Route::view('tampilan', 'template.template');
