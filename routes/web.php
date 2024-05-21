<?php
use App\Models\Penjualan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PenjualanController;


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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data 
Route::get('/penjualan/', [PenjualanController::class, 'index'])->middleware('auth');
Route::get('/penjualan/form/', [PenjualanController::class, 'create'])->middleware('auth');
Route::post('/penjualan/store/', [PenjualanController::class, 'store'])->middleware('auth');
Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit'])->middleware('auth');
Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])->middleware('auth');
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->middleware('auth');