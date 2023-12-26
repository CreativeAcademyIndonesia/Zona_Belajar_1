<?php

use App\Http\Controllers\dashboard\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;

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

Route::get('/', [welcomeController::class, 'index'])->name('home');
// Submission 2
Route::prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->names('dashboard.users');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
})->name('about');

// Middleware Group untuk Produk:
Route::middleware (['auth','user'])->group(function(){
    // Rute CRUD Produk yang terproteksi oleh middleware 'auth' dan 'user'
    Route::resource('produk', ProdukController::class);
});
// Rute Home dengan Middleware 'role:user':
Route::get('/home',[App\Http\controllers\HomeController::class,'index'])->name('home')->middleware('role:user');
//Route::resource (Autorisasi bisa di route atau di dalam controller)

// Route::get('/user/{id}', 'UserController@show');

// // Experiment
// Route::get('/tailwind', function () {
//     $data = [
//         'pageTitle' => 'Tentang Kami',
//         'content' => 'Ini adalah halaman tentang kami.'
//     ];
//     return view('Tailwind', $data);
// });


// Route::prefix('dashboard')->group(function () {
//     Route::get('/users', [masterUserController::class, 'index']);
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/tambah_user', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/simpan_user', [UserController::class, 'simpan'])->name('user.simpan');
// Route::get('/user/ubah_user/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::post('/user/update_user/{id}', [UserController::class, 'update'])->name('user.update');

// Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('/produk/tambah_produk', [ProdukController::class, 'tambah'])->name('produk.tambah');
// Route::post('/produk/simpan_produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
// Route::get('/produk/ubah_produk/{id}', [ProdukController::class, 'ubah'])->name('produk.ubah');
// Route::post('/produk/update_produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
