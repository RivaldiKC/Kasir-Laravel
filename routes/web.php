<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\KasirController;

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


Route::get('/', [BarangController::class, 'home']);

Route::get('/home', [BarangController::class, 'home']);

Route::get('/kasir', [KasirController::class, 'kasir']);

Route::post('/kasir', [KasirController::class, 'order']);

Route::get('/item', [KasirController::class, 'item']);


// yang dalam kurung {} nama nya wild card untuk mengambil data apapun didalam nya
// Route::get('/edit/{id}', [BarangController::class, 'edit']);

Route::get('/catatan', [BarangController::class, 'catatan']);

Route::resource('/dashboard', DashboardBarangController::class);