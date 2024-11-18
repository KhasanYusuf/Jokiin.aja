<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/login', function () {
    return view('Auth/login');
})->name('login');
Route::get('/register', function () {
    return view('Auth/register');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/single-product', function () {
    return view('single-product');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});

#Route Penjoki
Route::prefix('toko')->group(function () {
    Route::get('/dashboard', function () {
        return view('penjoki/dashboard-admin');
    });
});

#Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboardAdmin');

    Route::get('/datapenarikan', function () {
        return view('admin/data-penarikan');
    })->name('datapenarikan');

    Route::get('/tabledataadmin', function () {
        return view('admin/table-data-admin');
    })->name('tabledataadmin');

    Route::get('/tabledatapelanggan', function () {
        return view('admin/table-data-pelanggan');
    })->name('tabledatapelanggan');

    Route::get('/tabledatapenjoki', [AuthController::class, 'showPenjokiUsers'])->middleware('auth');
});

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

