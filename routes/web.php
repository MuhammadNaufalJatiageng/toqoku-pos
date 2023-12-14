<?php

use App\Models\Cart;
use App\Models\Store;
use App\Models\Product;
use App\Models\PurchaceHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaceHistoryController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/', function () {
    return view('dashboard.index', [
        'products' => Product::where('user_id', auth()->user()->id)->get(),
        'carts' => Cart::where('user_id', auth()->user()->id)->get()

    ]);
})->middleware('auth');

Route::post('/cart', [CartController::class, 'store']);
Route::post('/cart/reset', [CartController::class, 'reset']);

Route::get('/history', [PurchaceHistoryController::class, 'index']);
Route::post('/purchase', [PurchaceHistoryController::class, 'store']);
