<?php

use App\Livewire\ShoppingCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Livewire\CreateProduct;

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

Route::view('/', 'welcome')->name('welcome');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::get('/products/create', CreateProduct::class)->name('products.create');
