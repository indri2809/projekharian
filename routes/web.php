<?php

use App\Http\Controllers\laporanhariancontroller;
use App\Http\Controllers\proyekcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('dashboard',[
"title"=>"Dashboard"
    ]);
    });
Route::resource('proyek',proyekcontroller::class);
Route::get('lapharian/{id}',[laporanhariancontroller::class,'create'])->name('laporanharian.create');