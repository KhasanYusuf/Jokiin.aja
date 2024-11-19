<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;


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

// Route::get('/', function () {
//     return view('index');
// })->name('home');
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('user/profile', function () {
    return view('profile');
})->name('user.dashboard');

Route::get('penjoki/profile', function () {
    return view('profile');
})->name('penjoki.dashboard');

Route::get('admin/profile', function () {
    return view('profile');
})->name('admin.dashboard');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile');


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
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart/{postId}/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::put('cart/update', [CartController::class, 'update'])->name('cart.update'); // route untuk update
    Route::delete('cart/{cartId}/remove', [CartController::class, 'remove'])->name('cart.remove');
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




