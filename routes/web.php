<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpicController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Producttypes\ProducttypeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [CustomerController::class,'home'])->name('home');

Route::get('/', [CustomerController::class,'index'])->name('customers.index');
Route::get('/customercreate', [CustomerController::class,'create'])->name('customers.create');
Route::post('/customerstore', [CustomerController::class,'store'])->name('customers.store');
Route::get('/customershow/{id}', [CustomerController::class,'show '])->name('customer.show');


Route::get('/producttypecreate', [ProducttypeController::class,'create'])->name('create.producttypes');
Route::post('/producttypestore', [CustomerController::class,'store'])->name('store.productytypes');

