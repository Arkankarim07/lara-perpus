<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeminjamanController;
use App\Livewire\Buku;
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

Route::get('/', function () {
    return view('auth.register-page');   
});

Route::get('/home', function () {
    return view('home-page.home-page');
})->middleware('auth');

Route::get('/login', function () {
    return view('auth.login-page');
});


Route::middleware('auth')->group(function () {
    Route::get('/peminjaman', function () {
        return view('peminjaman-page.index');
    });
   
    Route::get('/peminjaman/{id}' , [PeminjamanController::class, 'show']);
    

    Route::post('/peminjaman', [PeminjamanController::class, 'store']);
});



Route::prefix('admin')->middleware('admin')->group(function () {
    Route::delete('/{id}/delete' , [PeminjamanController::class, 'destroy']);
    
    Route::get('/', function () {
        return view('admin-dashboard-page.index');
    })->name('admin.index');

    Route::get('/buku', function () {
        return view('admin-dashboard-page.buku');
    })->name('admin.buku');

    Route::get('/buku/tambah', [AdminController::class, 'formBuku'])->name('admin.form-buku');

    Route::post('/buku/tambah', [AdminController::class, 'tambahBuku'])->name('admin.tambah-buku');
   
    // Route::get('/buku/tambah')
});
