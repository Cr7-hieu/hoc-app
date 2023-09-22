<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class,'index']);
Route::get('/chuyen-muc/danh-sach}',[ChuyenMucController::class,'list'])->name('chuyenmuc.list');
Route::get('/chuyen-muc/them',[ChuyenMucController::class,'them'])->name('chuyenmuc.them');
Route::post('/chuyen-muc/them',[ChuyenMucController::class,'save'])->name('chuyenmuc.save');
Route::get('/chuyen-muc/sua/{id}',[ChuyenMucController::class,'update'])->name('chuyenmuc.update');
Route::put('/chuyen-muc/sua/{id}',[ChuyenMucController::class,'saveUpdate'])->name('chuyenmuc.save_update');
Route::delete('/chuyen-muc/delete/{id}',[ChuyenMucController::class,'setDelete'])->name('chuyenmuc.set_delete');



