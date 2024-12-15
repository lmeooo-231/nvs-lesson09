<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nvs-sinhviens',[NvsSinhVienController::class,'nvsList'])->name('NvsSinhVien.nvsList');
Route::get('/nvs-sinhviens/create',[NvsSinhVienController::class,'nvsCreate'])->name('NvsSinhVien.nvsCreate');
Route::post('/nvs-sinhviens/create',[NvsSinhVienController::class,'nvsCreateSubmit'])->name('NvsSinhVien.nvsCreateSubmit');