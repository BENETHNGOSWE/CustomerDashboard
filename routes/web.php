<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpicController;
use App\Http\Controllers\Customer\CustomerController;
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
    return view('welcome');
});

Route::get('/home', [EpicController::class,'home'])->name('home');

Route::get('/customerlist', [CustomerController::class,'index'])->name('customers.index');
Route::get('/customercreate', [CustomerController::class,'create'])->name('customers.create');
Route::post('/customerstore', [CustomerController::class,'store'])->name('customers.store');